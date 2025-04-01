<?php

namespace Flutterping\Models;

use Flutterping\Exceptions\InactiveVersionException;
use Flutterping\Exceptions\InvalidAppVersionException;
use Flutterping\Facades\Flutterping;
use Flutterping\ReleaseType;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $major
 * @property int $minor
 * @property int $patch
 * @property int $min_major
 * @property int $min_minor
 * @property int $min_patch
 * @property string $changes
 * @property string $name
 * @property string $release_type
 * @property-read string $version
 * @property-read bool $active
 *
 * @method static \Illuminate\Database\Eloquent\Builder|self version(int $major, int $minor, int $patch)
 */
class FlutterpingVersion extends Model
{
    protected $table = 'flutterping_versions';

    protected $fillable = [
        'major',
        'minor',
        'patch',
        'name',
        'changes',
        'release_type',
        'release_order',
    ];

    public function getVersionAttribute(): string
    {
        return "{$this->major}.{$this->minor}.{$this->patch}";
    }

    public function getActiveAttribute(): bool
    {
        return $this->release_type == ReleaseType::Published->value || $this->release_type === ReleaseType::PublishedToStore->value;
    }

    public function scopeVersion($query, $major, $minor, $patch)
    {
        return $query->where('major', $major)
            ->where('minor', $minor)
            ->where('patch', $patch);
    }

    /**
     * @throws InvalidAppVersionException
     * @throws InactiveVersionException
     */
    public static function getCurrentVersion(): FlutterpingVersion
    {
        $versionSteps = explode('.', Flutterping::getAppVersion());

        if (count($versionSteps) !== 3) {
            throw new InvalidAppVersionException('Invalid app version format. Expected format: x.y.z');
        }

        try {
            $flutterPingVersion = FlutterpingVersion::version(
                (int) $versionSteps[0],
                (int) $versionSteps[1],
                (int) $versionSteps[2]
            )->firstOrFail();

            if (! $flutterPingVersion->active && config('app.env') !== 'local') {
                throw new InactiveVersionException;
            }
            return $flutterPingVersion;
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            throw new InvalidAppVersionException('App version not found in the database.');
        } catch (InactiveVersionException $e) {
            throw $e;
        } catch (\Exception $e) {
            throw new InvalidAppVersionException($e->getMessage());
        }
    }

    public static function getSafeCurrentVersion(): ?FlutterpingVersion
    {
        try {
            return FlutterpingVersion::getCurrentVersion();
        } catch (\Exception $e) {
            return null;
        }
    }

    public static function getLatestVersion(): ?FlutterpingVersion
    {
        return FlutterpingVersion::where('release_type', ReleaseType::Published->value)
            ->orderBy('release_order', 'desc')
            ->first();
    }
}


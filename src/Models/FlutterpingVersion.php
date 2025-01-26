<?php

namespace Flutterping\Models;

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
 *
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
}

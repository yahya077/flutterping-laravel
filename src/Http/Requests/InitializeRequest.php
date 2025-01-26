<?php

namespace Flutterping\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InitializeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'app_name' => 'string|nullable',
            'package_name' => 'string|nullable',
            'version' => 'string|required',
            'build_number' => 'string|nullable',
            'device_name' => 'string|nullable',
            'device_model' => 'string|nullable',
            'os_version' => 'string|nullable',
            'platform' => 'string|nullable',
            'locale' => 'string|nullable',
            'language_code' => 'string|nullable',
            'country_code' => 'string|nullable',
            'timezone' => 'string|nullable',
            'system_theme' => 'string|nullable',
            'connection_type' => 'string|nullable',
            'deep_link' => 'string|nullable',
            'app_instance_id' => 'string|nullable',
        ];
    }
}

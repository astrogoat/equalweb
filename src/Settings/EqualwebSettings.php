<?php

namespace Astrogoat\Equalweb\Settings;

use Helix\Lego\Settings\AppSettings;
use Illuminate\Validation\Rule;

class EqualwebSettings extends AppSettings
{
    public string $sitekey;
    public string $querySelector;

    public function rules(): array
    {
        return [
             'sitekey' => Rule::requiredIf($this->enabled === true),
             'querySelector' => Rule::requiredIf($this->enabled === true),
        ];
    }

    public function help(): array
    {
        return [
            'querySelector' => 'This is the selector the EqualWeb widget will listen for clicks on to open the EqualWeb menu.',
        ];
    }

    public function description(): string
    {
        return 'Make your Website ADA Compliance – Tailored for Every Business Size!';
    }

    public static function group(): string
    {
        return 'equalweb';
    }
}

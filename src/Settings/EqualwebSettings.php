<?php

namespace Astrogoat\Equalweb\Settings;

use Helix\Lego\Settings\AppSettings;
use Illuminate\Validation\Rule;
use Astrogoat\Equalweb\Actions\EqualwebAction;

class EqualwebSettings extends AppSettings
{
     public string $sitekey;

    public function rules(): array
    {
        return [
             'sitekey' => Rule::requiredIf($this->enabled === true),
        ];
    }

    // protected static array $actions = [
    //     EqualwebAction::class,
    // ];

    // public static function encrypted(): array
    // {
    //     return ['access_token'];
    // }

    public function description(): string
    {
        return 'Interact with Equalweb.';
    }

    public static function group(): string
    {
        return 'equalweb';
    }
}

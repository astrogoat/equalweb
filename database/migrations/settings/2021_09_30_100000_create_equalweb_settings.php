<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateEqualwebSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('equalweb.enabled', false);
        $this->migrator->add('equalweb.sitekey', '');
    }

    public function down()
    {
        $this->migrator->delete('equalweb.enabled');
        $this->migrator->delete('equalweb.sitekey');
    }
}

<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('equalweb.querySelector', '#equalWeb');
    }

    public function down()
    {
        $this->migrator->delete('equalweb.querySelector');
    }
};

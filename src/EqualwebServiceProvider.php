<?php

namespace Astrogoat\Equalweb;

use Astrogoat\Equalweb\Settings\EqualwebSettings;
use Helix\Lego\Apps\App;
use Helix\Lego\Apps\Services\IncludeFrontendViews;
use Helix\Lego\LegoManager;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class EqualwebServiceProvider extends PackageServiceProvider
{
    public function registerApp(App $app)
    {
        return $app
            ->name('equalweb')
            ->settings(EqualwebSettings::class)
            ->includeFrontendViews(function (IncludeFrontendViews $views) {
                return $views->addToEnd('equalweb::script');
            })->includeFrontendViews(function(IncludeFrontendViews $views) {
                return $views->addToHead('equalweb::style');
            })
            ->migrations([
                __DIR__ . '/../database/migrations/settings',
            ]);
    }

    public function registeringPackage()
    {
        $this->callAfterResolving('lego', function (LegoManager $lego) {
            $lego->registerApp(fn (App $app) => $this->registerApp($app));
        });
    }

    public function configurePackage(Package $package): void
    {
        $package->name('equalweb')->hasConfigFile()->hasViews();
    }
}

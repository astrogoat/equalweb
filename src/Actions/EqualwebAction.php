<?php

namespace Astrogoat\Equalweb\Actions;

use Helix\Lego\Apps\Actions\Action;

class EqualwebAction extends Action
{
    public static function actionName(): string
    {
        return 'Equalweb action name';
    }

    public static function run(): mixed
    {
        return redirect()->back();
    }
}

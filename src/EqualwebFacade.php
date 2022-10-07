<?php

namespace Astrogoat\Equalweb;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Astrogoat\Equalweb\Equalweb
 */
class EqualwebFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'equalweb';
    }
}

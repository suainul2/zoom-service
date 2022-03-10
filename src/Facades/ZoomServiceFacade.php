<?php

namespace Suainul\ZoomService\Facades;

use Illuminate\Support\Facades\Facade;

class ZoomServiceFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'zoomservice';
    }
}
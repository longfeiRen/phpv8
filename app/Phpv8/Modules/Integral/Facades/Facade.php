<?php
namespace Phpv8\Modules\Integral\Facades;

use Illuminate\Support\Facades\Facade as MainFacade;

class Facade extends MainFacade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Phpv8\Modules\Integral\Repositories\ModuleInterface';
    }
}

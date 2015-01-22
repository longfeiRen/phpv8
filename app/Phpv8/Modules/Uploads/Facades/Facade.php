<?php
namespace Phpv8\Modules\Uploads\Facades;

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
        return 'Phpv8\Modules\Uploads\Repositories\ModuleInterface';
    }
}

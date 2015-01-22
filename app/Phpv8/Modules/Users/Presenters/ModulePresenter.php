<?php
namespace Phpv8\Modules\Users\Presenters;

use Phpv8\Presenters\Presenter;

class ModulePresenter extends Presenter
{

    public function dateLocalized()
    {
        return $this->entity->date->formatLocalized('%d %B %Y %H:%M');
    }
}

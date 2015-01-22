<?php
namespace Phpv8\Services;

use App;
use HTML;
use Route;
use Config;
use Request;

/**
* LangSwitcher
*/
class Phpv8
{
    private $model;

    /**
    * Set model
    *
    * @param Model $model
    */
    public function setModel($model)
    {
        $this->model = $model;
    }


    /**
    * Build admin or public link
    *
    * @param array $attributes
    * @return string
    */
    public function otherSideLink(array $attributes = array())
    {
        if ($this->isAdmin()) {
            return $this->publicLink($attributes);
        }
        return $this->adminLink($attributes);
    }

    /**
    * Check if we are on back office
    *
    * @return boolean true if we are on backend
    */
    public function isAdmin()
    {
        if (Request::segment(1) == 'admin') {
            return true;
        }
        return false;
    }

    /**
     * Indent values of an array of pages with spaces.
     *
     * @return array
     */
    public function arrayIndent($array)
    {
        $parent = 0;
        $items = [];
        foreach ($array as $item) {
            $indent = '';
            if ($item->parent_id) {
                $indent = '&nbsp;&nbsp;&nbsp;&nbsp;';
                if ($parent && $parent < $item->parent_id) {
                    $indent .= $indent;
                }
            }
            $parent = $item->parent_id;
            $items[$indent . $item->title] = $item->id;
        }
        return $items;
    }
}

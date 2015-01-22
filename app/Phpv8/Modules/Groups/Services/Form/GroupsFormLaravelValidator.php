<?php
namespace Phpv8\Modules\Groups\Services\Form;

use Phpv8\Services\Validation\AbstractLaravelValidator;

class GroupsFormLaravelValidator extends AbstractLaravelValidator
{

    /**
     * Validation rules
     *
     * @var Array
     */
    protected $rules = array(
        'module_name'    => 'required|unique:module',
        'status'  => 'required|integer',
    );
}

<?php
namespace Phpv8\Modules\Permission\Services\Form;

use Phpv8\Services\Validation\AbstractLaravelValidator;

class PermissionFormLaravelValidator extends AbstractLaravelValidator
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

<?php
namespace Phpv8\Modules\Uploads\Services\Form;

use Phpv8\Services\Validation\AbstractLaravelValidator;

class UploadsFormLaravelValidator extends AbstractLaravelValidator
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

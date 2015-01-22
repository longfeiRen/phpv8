<?php
namespace Phpv8\Modules\Images\Services\Form;

use Phpv8\Services\Validation\AbstractLaravelValidator;

class ImagesFormLaravelValidator extends AbstractLaravelValidator
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

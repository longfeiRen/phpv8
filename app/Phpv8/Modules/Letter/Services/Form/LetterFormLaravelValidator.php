<?php
namespace Phpv8\Modules\Letter\Services\Form;

use Phpv8\Services\Validation\AbstractLaravelValidator;

class LetterFormLaravelValidator extends AbstractLaravelValidator
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

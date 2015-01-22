<?php
namespace Phpv8\Modules\Setting\Services\Form;

use Phpv8\Services\Validation\AbstractLaravelValidator;

class SettingFormLaravelValidator extends AbstractLaravelValidator
{

    /**
     * Validation rules
     *
     * @var Array
     */
    protected $rules = array(
        'name'    => 'required|unique:setting',
        'key'    => 'required|unique:setting',
        'status'  => 'required|integer',
    );
}

<?php
namespace Phpv8\Modules\Setting\Services\Form;

use Phpv8\Services\Form\AbstractForm;
use Phpv8\Services\Validation\ValidableInterface;
use Phpv8\Modules\Setting\Repositories\SettingInterface;

class SettingForm extends AbstractForm
{

    public function __construct(ValidableInterface $validator, SettingInterface $setting)
    {
        $this->validator = $validator;
        $this->repository = $setting;
    }
}

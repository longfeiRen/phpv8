<?php
namespace Phpv8\Modules\Integral\Services\Form;

use Phpv8\Services\Form\AbstractForm;
use Phpv8\Services\Validation\ValidableInterface;
use Phpv8\Modules\Integral\Repositories\IntegralInterface;

class IntegralForm extends AbstractForm
{

    public function __construct(ValidableInterface $validator, IntegralInterface $integral)
    {
        $this->validator = $validator;
        $this->repository = $integral;
    }
}

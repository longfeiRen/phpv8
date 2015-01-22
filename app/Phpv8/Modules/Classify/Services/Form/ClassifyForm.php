<?php
namespace Phpv8\Modules\Classify\Services\Form;

use Phpv8\Services\Form\AbstractForm;
use Phpv8\Services\Validation\ValidableInterface;
use Phpv8\Modules\Classify\Repositories\ClassifyInterface;

class ClassifyForm extends AbstractForm
{

    public function __construct(ValidableInterface $validator, ClassifyInterface $classify)
    {
        $this->validator = $validator;
        $this->repository = $classify;
    }
}

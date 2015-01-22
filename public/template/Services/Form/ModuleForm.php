<?php
namespace Phpv8\Modules\{Module}\Services\Form;

use Phpv8\Services\Form\AbstractForm;
use Phpv8\Services\Validation\ValidableInterface;
use Phpv8\Modules\{Module}\Repositories\{Module}Interface;

class {Module}Form extends AbstractForm
{

    public function __construct(ValidableInterface $validator, {Module}Interface ${name})
    {
        $this->validator = $validator;
        $this->repository = ${name};
    }
}

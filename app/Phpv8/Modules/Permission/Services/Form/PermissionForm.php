<?php
namespace Phpv8\Modules\Permission\Services\Form;

use Phpv8\Services\Form\AbstractForm;
use Phpv8\Services\Validation\ValidableInterface;
use Phpv8\Modules\Permission\Repositories\PermissionInterface;

class PermissionForm extends AbstractForm
{

    public function __construct(ValidableInterface $validator, PermissionInterface $permission)
    {
        $this->validator = $validator;
        $this->repository = $permission;
    }
}

<?php
namespace Phpv8\Modules\Groups\Services\Form;

use Phpv8\Services\Form\AbstractForm;
use Phpv8\Services\Validation\ValidableInterface;
use Phpv8\Modules\Groups\Repositories\GroupsInterface;

class GroupsForm extends AbstractForm
{

    public function __construct(ValidableInterface $validator, GroupsInterface $groups)
    {
        $this->validator = $validator;
        $this->repository = $groups;
    }
}

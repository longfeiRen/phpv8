<?php
namespace Phpv8\Modules\Users\Services\Form;

use Phpv8\Services\Form\AbstractForm;
use Phpv8\Services\Validation\ValidableInterface;
use Phpv8\Modules\Users\Repositories\UsersInterface;

class UsersForm extends AbstractForm
{

    public function __construct(ValidableInterface $validator, UsersInterface $news)
    {
        $this->validator = $validator;
        $this->repository = $news;
    }
}

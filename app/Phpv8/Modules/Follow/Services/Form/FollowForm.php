<?php
namespace Phpv8\Modules\Follow\Services\Form;

use Phpv8\Services\Form\AbstractForm;
use Phpv8\Services\Validation\ValidableInterface;
use Phpv8\Modules\Follow\Repositories\FollowInterface;

class FollowForm extends AbstractForm
{

    public function __construct(ValidableInterface $validator, FollowInterface $follow)
    {
        $this->validator = $validator;
        $this->repository = $follow;
    }
}

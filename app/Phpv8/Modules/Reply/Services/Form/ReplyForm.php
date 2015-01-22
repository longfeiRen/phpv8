<?php
namespace Phpv8\Modules\Reply\Services\Form;

use Phpv8\Services\Form\AbstractForm;
use Phpv8\Services\Validation\ValidableInterface;
use Phpv8\Modules\Reply\Repositories\ReplyInterface;

class ReplyForm extends AbstractForm
{

    public function __construct(ValidableInterface $validator, ReplyInterface $reply)
    {
        $this->validator = $validator;
        $this->repository = $reply;
    }
}

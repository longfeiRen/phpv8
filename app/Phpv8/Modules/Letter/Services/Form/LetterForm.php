<?php
namespace Phpv8\Modules\Letter\Services\Form;

use Phpv8\Services\Form\AbstractForm;
use Phpv8\Services\Validation\ValidableInterface;
use Phpv8\Modules\Letter\Repositories\LetterInterface;

class LetterForm extends AbstractForm
{

    public function __construct(ValidableInterface $validator, LetterInterface $letter)
    {
        $this->validator = $validator;
        $this->repository = $letter;
    }
}

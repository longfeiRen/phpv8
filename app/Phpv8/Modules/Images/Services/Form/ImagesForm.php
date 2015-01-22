<?php
namespace Phpv8\Modules\Images\Services\Form;

use Phpv8\Services\Form\AbstractForm;
use Phpv8\Services\Validation\ValidableInterface;
use Phpv8\Modules\Images\Repositories\ImagesInterface;

class ImagesForm extends AbstractForm
{

    public function __construct(ValidableInterface $validator, ImagesInterface $images)
    {
        $this->validator = $validator;
        $this->repository = $images;
    }
}

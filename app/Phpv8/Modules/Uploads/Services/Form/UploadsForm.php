<?php
namespace Phpv8\Modules\Uploads\Services\Form;

use Phpv8\Services\Form\AbstractForm;
use Phpv8\Services\Validation\ValidableInterface;
use Phpv8\Modules\Uploads\Repositories\UploadsInterface;

class UploadsForm extends AbstractForm
{

    public function __construct(ValidableInterface $validator, UploadsInterface $uploads)
    {
        $this->validator = $validator;
        $this->repository = $uploads;
    }
}

<?php
namespace Phpv8\Modules\Video\Services\Form;

use Phpv8\Services\Form\AbstractForm;
use Phpv8\Services\Validation\ValidableInterface;
use Phpv8\Modules\Video\Repositories\VideoInterface;

class VideoForm extends AbstractForm
{

    public function __construct(ValidableInterface $validator, VideoInterface $video)
    {
        $this->validator = $validator;
        $this->repository = $video;
    }
}

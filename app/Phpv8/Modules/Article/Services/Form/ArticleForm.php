<?php
namespace Phpv8\Modules\Article\Services\Form;

use Phpv8\Services\Form\AbstractForm;
use Phpv8\Services\Validation\ValidableInterface;
use Phpv8\Modules\Article\Repositories\ArticleInterface;

class ArticleForm extends AbstractForm
{

    public function __construct(ValidableInterface $validator, ArticleInterface $article)
    {
        $this->validator = $validator;
        $this->repository = $article;
    }
}

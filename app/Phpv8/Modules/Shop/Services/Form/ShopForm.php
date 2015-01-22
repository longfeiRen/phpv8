<?php
namespace Phpv8\Modules\Shop\Services\Form;

use Phpv8\Services\Form\AbstractForm;
use Phpv8\Services\Validation\ValidableInterface;
use Phpv8\Modules\Shop\Repositories\ShopInterface;

class ShopForm extends AbstractForm
{

    public function __construct(ValidableInterface $validator, ShopInterface $shop)
    {
        $this->validator = $validator;
        $this->repository = $shop;
    }
}

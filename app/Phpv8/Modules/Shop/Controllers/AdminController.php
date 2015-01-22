<?php
namespace Phpv8\Modules\Shop\Controllers;

use Phpv8\Controllers\AdminBaseController;
use Phpv8\Modules\Shop\Repositories\ShopInterface;
use Phpv8\Modules\Shop\Services\Form\ShopForm;

class AdminController extends AdminBaseController {

	public function __construct(ShopInterface $shop, ShopForm $shopform)
	{
		parent::__construct($shop,$shopform);
	}


}
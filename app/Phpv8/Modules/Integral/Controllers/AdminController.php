<?php
namespace Phpv8\Modules\Integral\Controllers;

use Phpv8\Controllers\AdminBaseController;
use Phpv8\Modules\Integral\Repositories\IntegralInterface;
use Phpv8\Modules\Integral\Services\Form\IntegralForm;

class AdminController extends AdminBaseController {

	public function __construct(IntegralInterface $integral, IntegralForm $integralform)
	{
		parent::__construct($integral,$integralform);
	}


}
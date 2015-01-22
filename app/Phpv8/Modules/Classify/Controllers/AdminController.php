<?php
namespace Phpv8\Modules\Classify\Controllers;

use Phpv8\Controllers\AdminBaseController;
use Phpv8\Modules\Classify\Repositories\ClassifyInterface;
use Phpv8\Modules\Classify\Services\Form\ClassifyForm;

class AdminController extends AdminBaseController {

	public function __construct(ClassifyInterface $classify, ClassifyForm $classifyform)
	{
		parent::__construct($classify,$classifyform);
	}


}
<?php
namespace Phpv8\Modules\Follow\Controllers;

use Phpv8\Controllers\AdminBaseController;
use Phpv8\Modules\Follow\Repositories\FollowInterface;
use Phpv8\Modules\Follow\Services\Form\FollowForm;

class AdminController extends AdminBaseController {

	public function __construct(FollowInterface $follow, FollowForm $followform)
	{
		parent::__construct($follow,$followform);
	}


}
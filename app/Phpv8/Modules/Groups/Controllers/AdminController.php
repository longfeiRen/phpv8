<?php
namespace Phpv8\Modules\Groups\Controllers;

use Phpv8\Controllers\AdminBaseController;
use Phpv8\Modules\Groups\Repositories\GroupsInterface;
use Phpv8\Modules\Groups\Services\Form\GroupsForm;

class AdminController extends AdminBaseController {

	public function __construct(GroupsInterface $groups, GroupsForm $groupsform)
	{
		parent::__construct($groups,$groupsform);
	}


}
<?php
namespace Phpv8\Modules\Permission\Controllers;

use Phpv8\Controllers\AdminBaseController;
use Phpv8\Modules\Permission\Repositories\PermissionInterface;
use Phpv8\Modules\Permission\Services\Form\PermissionForm;

class AdminController extends AdminBaseController {

	public function __construct(PermissionInterface $permission, PermissionForm $permissionform)
	{
		parent::__construct($permission,$permissionform);
	}


}
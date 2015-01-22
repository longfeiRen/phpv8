<?php
namespace Phpv8\Modules\Users\Controllers;

use Phpv8\Controllers\AdminBaseController;
use Phpv8\Modules\Users\Repositories\UsersInterface;
use Phpv8\Modules\Users\Services\Form\UsersForm;
use Lang;

class AdminController extends AdminBaseController {

	public function __construct(UsersInterface $users, UsersForm $usersform)
	{
		parent::__construct($users,$usersform);
		$this->title['parent'] = Lang::get('Users::global.title');
	}

}
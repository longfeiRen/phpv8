<?php
namespace Phpv8\Modules\Dashboard\Controllers;
use View;
use Lang;
use Phpv8\Controllers\AdminBaseController;


class AdminController extends AdminBaseController {

	public function __construct()
	{
		parent::__construct();
		$this->title['parent'] = Lang::get('Dashboard::global.title');
	}

	public function index()
	{
		$this->layout->content = View::make('Dashboard.admin.index');
	}

}
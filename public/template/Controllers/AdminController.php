<?php
namespace Phpv8\Modules\{Module}\Controllers;

use Phpv8\Controllers\AdminBaseController;
use Phpv8\Modules\{Module}\Repositories\{Module}Interface;
use Phpv8\Modules\{Module}\Services\Form\{Module}Form;

class AdminController extends AdminBaseController {

	public function __construct({Module}Interface ${name}, {Module}Form ${name}form)
	{
		parent::__construct(${name},${name}form);
	}


}
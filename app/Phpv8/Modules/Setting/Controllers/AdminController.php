<?php
namespace Phpv8\Modules\Setting\Controllers;

use Phpv8\Controllers\AdminBaseController;
use Phpv8\Modules\Setting\Repositories\SettingInterface;
use Phpv8\Modules\Setting\Services\Form\SettingForm;

class AdminController extends AdminBaseController {

	public function __construct(SettingInterface $setting, SettingForm $settingform)
	{
		parent::__construct($setting,$settingform);
		$this->title['parent'] = Lang::get('Setting::global.title');
	}


}
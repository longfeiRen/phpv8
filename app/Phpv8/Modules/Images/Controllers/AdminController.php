<?php
namespace Phpv8\Modules\Images\Controllers;

use Phpv8\Controllers\AdminBaseController;
use Phpv8\Modules\Images\Repositories\ImagesInterface;
use Phpv8\Modules\Images\Services\Form\ImagesForm;

class AdminController extends AdminBaseController {

	public function __construct(ImagesInterface $images, ImagesForm $imagesform)
	{
		parent::__construct($images,$imagesform);
	}


}
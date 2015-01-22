<?php
namespace Phpv8\Modules\Uploads\Controllers;

use Phpv8\Controllers\AdminBaseController;
use Phpv8\Modules\Uploads\Repositories\UploadsInterface;
use Phpv8\Modules\Uploads\Services\Form\UploadsForm;

class AdminController extends AdminBaseController {

	public function __construct(UploadsInterface $uploads, UploadsForm $uploadsform)
	{
		parent::__construct($uploads,$uploadsform);
	}


}
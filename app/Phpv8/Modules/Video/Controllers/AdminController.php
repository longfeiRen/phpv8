<?php
namespace Phpv8\Modules\Video\Controllers;

use Lang;
use Phpv8\Controllers\AdminBaseController;
use Phpv8\Modules\Video\Repositories\VideoInterface;
use Phpv8\Modules\Video\Services\Form\VideoForm;

class AdminController extends AdminBaseController {

	public function __construct(VideoInterface $video, VideoForm $videoform)
	{
		parent::__construct($video,$videoform);
	}


}
<?php
namespace Phpv8\Modules\Reply\Controllers;

use Phpv8\Controllers\AdminBaseController;
use Phpv8\Modules\Reply\Repositories\ReplyInterface;
use Phpv8\Modules\Reply\Services\Form\ReplyForm;

class AdminController extends AdminBaseController {

	public function __construct(ReplyInterface $reply, ReplyForm $replyform)
	{
		parent::__construct($reply,$replyform);
	}


}
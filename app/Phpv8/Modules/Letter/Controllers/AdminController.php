<?php
namespace Phpv8\Modules\Letter\Controllers;

use Phpv8\Controllers\AdminBaseController;
use Phpv8\Modules\Letter\Repositories\LetterInterface;
use Phpv8\Modules\Letter\Services\Form\LetterForm;

class AdminController extends AdminBaseController {

	public function __construct(LetterInterface $letter, LetterForm $letterform)
	{
		parent::__construct($letter,$letterform);
	}


}
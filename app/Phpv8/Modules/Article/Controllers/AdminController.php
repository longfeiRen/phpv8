<?php
namespace Phpv8\Modules\Article\Controllers;

use Phpv8\Controllers\AdminBaseController;
use Phpv8\Modules\Article\Repositories\ArticleInterface;
use Phpv8\Modules\Article\Services\Form\ArticleForm;

class AdminController extends AdminBaseController {

	public function __construct(ArticleInterface $article, ArticleForm $articleform)
	{
		parent::__construct($article,$articleform);
	}


}
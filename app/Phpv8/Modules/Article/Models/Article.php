<?php
namespace Phpv8\Modules\Article\Models;

use Phpv8\Models\Base;
class Article extends Base {
	protected $table = 'article';
	protected $fillable = ['id','module_name','alias','status'];
	public $timestamps = true;
}
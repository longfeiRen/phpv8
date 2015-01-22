<?php
namespace Phpv8\Modules\Reply\Models;

use Phpv8\Models\Base;
class Reply extends Base {
	protected $table = 'module';
	protected $fillable = ['id','module_name','alias','status'];
	public $timestamps = true;
}
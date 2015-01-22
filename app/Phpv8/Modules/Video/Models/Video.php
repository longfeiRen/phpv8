<?php
namespace Phpv8\Modules\Video\Models;

use Phpv8\Models\Base;
class Video extends Base {
	protected $table = 'module';
	protected $fillable = ['id','module_name','alias','status'];
	public $timestamps = true;
}
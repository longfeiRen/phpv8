<?php
namespace Phpv8\Modules\Classify\Models;

use Phpv8\Models\Base;
class Classify extends Base {
	protected $table = 'module';
	protected $fillable = ['id','module_name','alias','status'];
	public $timestamps = true;
}
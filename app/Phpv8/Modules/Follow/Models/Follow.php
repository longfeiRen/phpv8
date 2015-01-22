<?php
namespace Phpv8\Modules\Follow\Models;

use Phpv8\Models\Base;
class Follow extends Base {
	protected $table = 'module';
	protected $fillable = ['id','module_name','alias','status'];
	public $timestamps = true;
}
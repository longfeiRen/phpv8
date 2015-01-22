<?php
namespace Phpv8\Modules\Letter\Models;

use Phpv8\Models\Base;
class Letter extends Base {
	protected $table = 'module';
	protected $fillable = ['id','module_name','alias','status'];
	public $timestamps = true;
}
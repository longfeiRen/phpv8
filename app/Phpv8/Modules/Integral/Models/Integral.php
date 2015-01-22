<?php
namespace Phpv8\Modules\Integral\Models;

use Phpv8\Models\Base;
class Integral extends Base {
	protected $table = 'module';
	protected $fillable = ['id','module_name','alias','status'];
	public $timestamps = true;
}
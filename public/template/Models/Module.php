<?php
namespace Phpv8\Modules\{Module}\Models;

use Phpv8\Models\Base;
class {Module} extends Base {
	protected $table = 'module';
	protected $fillable = ['id','module_name','alias','status'];
	public $timestamps = true;
}
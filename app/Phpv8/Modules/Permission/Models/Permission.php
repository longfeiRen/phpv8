<?php
namespace Phpv8\Modules\Permission\Models;

use Phpv8\Models\Base;
class Permission extends Base {
	protected $table = 'module';
	protected $fillable = ['id','module_name','alias','status'];
	public $timestamps = true;
}
<?php
namespace Phpv8\Modules\Images\Models;

use Phpv8\Models\Base;
class Images extends Base {
	protected $table = 'module';
	protected $fillable = ['id','module_name','alias','status'];
	public $timestamps = true;
}
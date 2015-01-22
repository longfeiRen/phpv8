<?php
namespace Phpv8\Modules\Setting\Models;

use Phpv8\Models\Base;
class Setting extends Base {
	protected $table = 'setting';
	protected $fillable = ['id','name','key','value','package'];
	public $timestamps = true;
}
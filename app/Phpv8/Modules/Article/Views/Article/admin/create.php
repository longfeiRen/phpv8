{{ Form::open(['route' => 'admin.'.Request::segment(2).'.store', 'method' => 'POST', 'class'=>'form-horizontal group-border-dashed']) }}
	<div class="form-group">
        <label class="col-sm-3 control-label">模块名称</label>
        <div class="col-sm-6">
            <input type="text" name="module_name" class="form-control" required="" placeholder="模块名称以英文输入">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">路由别名</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="alias" data-parsley-minlength="6" placeholder="如果留空，默认为模块名">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">启用状态</label>
        <div class="col-sm-6">
            <input type="radio" class="form-control" name="status" value="1" checked />开启
            <input type="radio" class="form-control" name="status" value="0" />关闭
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Submit</button> <button class="btn btn-default">Cancel</button>
        </div>
    </div>
{{ Form::close() }}
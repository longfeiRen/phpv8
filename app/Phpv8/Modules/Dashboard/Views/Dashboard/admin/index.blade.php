@section('main')
<div class="row">
	<div class="col-sm-4">
		<div class="block-flat">
			<div class="header">
				<h3>{{ Lang::get('Dashboard::global.cpu') }}</h3>
			</div>
			<div class="content text-center">
				<div class="epie-chart" data-barcolor="#4D90FD" data-trackcolor="#F3F3F3" data-percent="45"><span>0%</span></div>
			</div>
		</div>					
	</div>
	<div class="col-sm-4">
		<div class="block-flat">
			<div class="header">
				<h3>{{ Lang::get('Dashboard::global.memory') }}</h3>
			</div>
			<div class="content text-center">
				<div class="epie-chart" data-barcolor="#FD6A5E" data-trackcolor="#F3F3F3" data-percent="60"><span>0%</span></div>
			</div>
		</div>					
	</div>
	<div class="col-sm-4">
		<div class="block-flat">
			<div class="header">
				<h3>{{ Lang::get('Dashboard::global.disk') }}</h3>
			</div>
			<div class="content text-center">
				<div class="epie-chart" data-barcolor="#B450B2" data-trackcolor="#F3F3F3" data-percent="75"><span>0%</span></div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-6 col-md-6">
	  <div class="block-flat">
	    <div class="content no-padding">
	      <h4 class="title">{{ Lang::get('Dashboard::global.system') }}</h4>
	      <div class="list-group tickets">
	        <li class="list-group-item">{{ Lang::get('Dashboard::global.OS') }} <span class="badge badge-primary">20</span></li>
	        <li class="list-group-item">{{ Lang::get('Dashboard::global.OS info') }} <span class="badge badge-success">35</span></li>
	        <li class="list-group-item">{{ Lang::get('Dashboard::global.hostname') }} <span class="badge">45</span></li>
	        <li class="list-group-item">{{ Lang::get('Dashboard::global.system time') }} <span class="badge">45</span></li>
	        <li class="list-group-item">{{ Lang::get('Dashboard::global.online time') }} <span class="badge">45</span></li>
	      </div>              
	    </div>
	  </div>
	  
	</div>
	<div class="col-sm-6 col-md-6">
		<div class="block-flat">
	    <div class="content no-padding">
	      <h4 class="title">{{ Lang::get('Dashboard::global.procedure') }}</h4>
	      <div class="list-group tickets">
	        <li class="list-group-item">{{ Lang::get('Dashboard::global.version') }} <span class="badge badge-primary">20</span></li>
	        <li class="list-group-item">{{ Lang::get('Dashboard::global.type') }} <span class="badge badge-success">35</span></li>
	        <li class="list-group-item">{{ Lang::get('Dashboard::global.update') }} <span class="badge">45</span></li>
	        <li class="list-group-item">{{ Lang::get('Dashboard::global.copyright') }} <span class="badge">45</span></li>
	        <li class="list-group-item">{{ Lang::get('Dashboard::global.contact') }} <span class="badge">45</span></li>
	      </div>              
	    </div>
	  </div>
	</div>
</div>
@stop
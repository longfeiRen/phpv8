<!DOCTYPE html>
<html lang="{{ Config::get('app.locale') }}">
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <link rel="shortcut icon" href="images/favicon.png">
	    <title>{{ $title }}</title>
		<link href='http://fonts.useso.com/css?family=Open+Sans:400,300,600,400italic,700,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.useso.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
		<link href='http://fonts.useso.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		{{ HTML::style("$static/js/bootstrap/dist/css/bootstrap.css",['rel'=>'stylesheet','type'=>'text/css']) }}
		{{ HTML::style("$static/fonts/font-awesome-4/css/font-awesome.min.css",['rel'=>'stylesheet','type'=>'text/css']) }}

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  {{HTML::script("$static/js/html5shiv.js",['type'=>'text/javascript'])}}
		<![endif]-->
		{{ HTML::style("$static/js/jquery.gritter/css/jquery.gritter.css",['rel'=>'stylesheet','type'=>'text/css']) }}

		{{ HTML::style("$static/js/jquery.nanoscroller/nanoscroller.css",['rel'=>'stylesheet','type'=>'text/css']) }}
		@if ( Request::segment(2) === NULL )
		{{ HTML::style("$static/js/jquery.easypiechart/jquery.easy-pie-chart.css",['rel'=>'stylesheet','type'=>'text/css']) }}
		@endif
		{{ HTML::style("$static/js/bootstrap.switch/bootstrap-switch.css",['rel'=>'stylesheet','type'=>'text/css']) }}
		{{ HTML::style("$static/js/bootstrap.datetimepicker/css/bootstrap-datetimepicker.min.css",['rel'=>'stylesheet','type'=>'text/css']) }}
		{{ HTML::style("$static/js/jquery.select2/select2.css",['rel'=>'stylesheet','type'=>'text/css']) }}
		{{ HTML::style("$static/js/bootstrap.slider/css/slider.css",['rel'=>'stylesheet','type'=>'text/css']) }}
		{{ HTML::style("$static/js/jquery.datatables/bootstrap-adapter/css/datatables.css",['rel'=>'stylesheet','type'=>'text/css']) }}
		<!-- Custom styles for this template -->
		{{ HTML::style("$static/css/style.css",['rel'=>'stylesheet','type'=>'text/css']) }}
	</head>
	<body>
		<!-- header -->
		<div id="head-nav" class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
			    <div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="fa fa-gear"></span>
					</button>
			    	<a class="navbar-brand" href="#"><span>Clean Zone</span></a>
			    </div>
			    <div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#about">About</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="dropdown-submenu">
									<a href="#">Sub menu</a>
									<ul class="dropdown-menu">
										<li><a href="#">Action</a></li>
										<li><a href="#">Another action</a></li>
										<li><a href="#">Something else here</a></li>
									</ul>
								</li>              
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Large menu <b class="caret"></b></a>
							<ul class="dropdown-menu col-menu-2">
							  <li class="col-sm-6 no-padding">
							    <ul>
							    <li class="dropdown-header"><i class="fa fa-group"></i>Users</li>
							    <li><a href="#">Action</a></li>
							    <li><a href="#">Another action</a></li>
							    <li><a href="#">Something else here</a></li>
							    <li class="dropdown-header"><i class="fa fa-gear"></i>Config</li>
							    <li><a href="#">Action</a></li>
							    <li><a href="#">Another action</a></li>
							    <li><a href="#">Something else here</a></li> 
							    </ul>
							  </li>
							  <li  class="col-sm-6 no-padding">
							    <ul>
							    <li class="dropdown-header"><i class="fa fa-legal"></i>Sales</li>
							    <li><a href="#">New sale</a></li>
							    <li><a href="#">Register a product</a></li>
							    <li><a href="#">Register a client</a></li> 
							    <li><a href="#">Month sales</a></li>
							    <li><a href="#">Delivered orders</a></li>
							    </ul>
							  </li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right user-nav">
						<li class="dropdown profile_menu">
					    	<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					    		{{ HTML::image("$img/images/avatar2.jpg",'Avatar') }}
					    		<span>Jeff Hanneman</span> <b class="caret"></b></a>
					    	<ul class="dropdown-menu">
					    		<li><a href="#">My Account</a></li>
					      		<li><a href="#">Profile</a></li>
					      		<li><a href="#">Messages</a></li>
					      		<li class="divider"></li>
					      		<li><a href="#">Sign Out</a></li>
					    	</ul>
					  	</li>
					</ul>     
					<ul class="nav navbar-nav navbar-right not-nav" >
						<li class="button dropdown">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class=" fa fa-comments"></i></a>
							<ul class="dropdown-menu messages">
								<li>
									<div class="nano nscroller">
									  <div class="content">
									    <ul>
									      <li>
									        <a href="#">
									        	{{ HTML::image("$img/images/avatar2.jpg",'avatar') }}
									          	<span class="date pull-right">13 Sept.</span>
									          	<span class="name">Daniel</span> I'm following you, and I want your money! 
									        </a>
									      </li>
									      <li>
									        <a href="#">
										        {{ HTML::image("$img/images/avatar_50.jpg",'avatar') }}
										        <span class="date pull-right">20 Oct.</span><span class="name">Adam</span> is now following you 
									        </a>
									      </li>
									      <li>
									        <a href="#">
									        	{{ HTML::image("$img/images/avatar4_50.jpg",'avatar') }}
									          	<span class="date pull-right">2 Nov.</span><span class="name">Michael</span> is now following you 
									        </a>
									      </li>
									      <li>
									        <a href="#">
									          	{{ HTML::image("$img/images/avatar3_50.jpg",'avatar') }}
									          	<span class="date pull-right">2 Nov.</span><span class="name">Lucy</span> is now following you 
									        </a>
									      </li>
									    </ul>
									  </div>
									</div>
									<ul class="foot"><li><a href="#">View all messages </a></li></ul>           
								</li>
							</ul>
						</li>
						<li class="button dropdown">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe"></i><span class="bubble">2</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="nano nscroller">
									  <div class="content">
									    <ul>
									      <li><a href="#"><i class="fa fa-cloud-upload info"></i><b>Daniel</b> is now following you <span class="date">2 minutes ago.</span></a></li>
									      <li><a href="#"><i class="fa fa-male success"></i> <b>Michael</b> is now following you <span class="date">15 minutes ago.</span></a></li>
									      <li><a href="#"><i class="fa fa-bug warning"></i> <b>Mia</b> commented on post <span class="date">30 minutes ago.</span></a></li>
									      <li><a href="#"><i class="fa fa-credit-card danger"></i> <b>Andrew</b> killed someone <span class="date">1 hour ago.</span></a></li>
									    </ul>
									  </div>
									</div>
									<ul class="foot"><li><a href="#">View all activity </a></li></ul>           
								</li>
							</ul>
						</li>
						<li class="button"><a href="javascript:;" class="speech-button"><i class="fa fa-microphone"></i></a></li>
					</ul>
			    </div><!--/.nav-collapse animate-collapse -->
			</div>
		</div>
		<!-- header END-->
		<div id="cl-wrapper" class="fixed-menu">
			<div class="cl-sidebar" data-position="right" data-step="1" >
				@section('sidebar')
			        @include('admin._sidebar')
			    @show
			</div>
			<div class="container-fluid" id="pcont">
				<div class="page-head">
					@if(Request::segment(2) === null)
					<h2>{{ Lang::get('Dashboard::global.title') }}</h2>
					@else
					<h2>{{ Lang::get( ucfirst(Request::segment(2)). '::global.title') }}</h2>
					@endif
		            @section('breadcrumbs')
		                {{ Breadcrumbs::renderIfExists() }}
		            @show
				</div>
				<div class="cl-mcont">
					@yield('main')
				</div>
			</div>
		</div>

  	{{HTML::script("$static/js/jquery.js",['type'=>'text/javascript'])}}
  	{{HTML::script("$static/js/jquery.gritter/js/jquery.gritter.js",['type'=>'text/javascript'])}}
  	{{HTML::script("$static/js/jquery.nanoscroller/jquery.nanoscroller.js",['type'=>'text/javascript'])}}
    {{HTML::script("$static/js/jquery.ui/jquery-ui.js",['type'=>'text/javascript'])}}
  	{{HTML::script("$static/js/jquery.sparkline/jquery.sparkline.min.js",['type'=>'text/javascript'])}}
	@if ( Request::segment(2) === null )
  	{{HTML::script("$static/js/jquery.easypiechart/jquery.easy-pie-chart.js",['type'=>'text/javascript'])}}
	@endif
  	{{HTML::script("$static/js/jquery.nestable/jquery.nestable.js",['type'=>'text/javascript'])}}
  	{{HTML::script("$static/js/bootstrap.switch/bootstrap-switch.min.js",['type'=>'text/javascript'])}}
  	{{HTML::script("$static/js/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js",['type'=>'text/javascript'])}}
    {{HTML::script("$static/js/jquery.select2/select2.min.js",['type'=>'text/javascript'])}}
    {{HTML::script("$static/js/skycons/skycons.js",['type'=>'text/javascript'])}}
    {{HTML::script("$static/js/bootstrap.slider/js/bootstrap-slider.js",['type'=>'text/javascript'])}}
	
  	{{HTML::script("$static/js/jquery.datatables/jquery.datatables.min.js",['type'=>'text/javascript'])}}
  	{{HTML::script("$static/js/jquery.datatables/bootstrap-adapter/js/datatables.js",['type'=>'text/javascript'])}}
  	{{HTML::script("$static/js/behaviour/general.js",['type'=>'text/javascript'])}}
  	<script type="text/javascript">
  	$(document).ready(function(){
        //initialize the javascript
        App.init();
	@if( Request::segment(3) == '' || Request::segment(3) == '/' )
		@if ( Request::segment(2) !== null )
			@include('_script')
		@else
			@include('Dashboard.admin.script_footer')
		@endif
	@else
	

	@endif
	});
	</script>
    {{HTML::script("$static/js/behaviour/voice-commands.js",['type'=>'text/javascript'])}}
    {{HTML::script("$static/js/bootstrap/dist/js/bootstrap.min.js",['type'=>'text/javascript'])}}
    {{HTML::script("$static/js/jquery.flot/jquery.flot.js",['type'=>'text/javascript'])}}
    {{HTML::script("$static/js/jquery.flot/jquery.flot.pie.js",['type'=>'text/javascript'])}}
    {{HTML::script("$static/js/jquery.flot/jquery.flot.resize.js",['type'=>'text/javascript'])}}
    {{HTML::script("$static/js/jquery.flot/jquery.flot.labels.js",['type'=>'text/javascript'])}}
	
	</body>
</html>
@section('main')
	@if ( isset($field) )
		@include(ucfirst(Request::segment(2)) . '.admin.index',array('field'=>$field))
	@else
		@include(ucfirst(Request::segment(2)) . '.admin.index')
	@endif
@stop

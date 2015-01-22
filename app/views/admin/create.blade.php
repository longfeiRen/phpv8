@section('main')
  @include(ucfirst(Request::segment(2)) . '.admin.create')
@stop

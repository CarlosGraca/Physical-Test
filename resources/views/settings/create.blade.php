@extends($layout)

@section('main-content')

	{!! Form::open(['route'=>'settings.store', 'id'=>'settings-form','files'=>true]) !!}
	    @include('settings.form', array('submitButtonText'=>'Add Setting'))
	{!! Form::close() !!}
	
@endsection
@extends($layout)

@section('main-content')

	{!! Form::model($setting, ['method'=>'PATCH','route'=>['settings.update', $setting->id],'id'=>'settings-form','files'=>true])!!}
	    @include('settings.form', array('submitButtonText'=>'Edit Setting'))
	{!! Form::close() !!}
	
@endsection
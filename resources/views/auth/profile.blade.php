@extends('layouts.app')

@section('htmlheader_title')
	Profile
@endsection

@section('contentheader_title')
  Physical Test
@endsection

@section('contentheader_description')
  My Profile
@endsection


@section('main-content')
	<div class="row">
	    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	        <div class="box box-solid">

	            <div class="box-body">
	                <div class="nav-tabs-custom">
					    <ul class="nav nav-tabs">
					        <li class="active">
					             <a href="#profile" data-toggle="tab"><i class="fa fa-user"></i> My Profile</a>
					        </li>
					        <li>
					            <a href="#password" data-toggle="tab"><i class="fa fa-key"></i> Reset Password</a>
					        </li>
					     </ul>
					     <div class="tab-content">
					        <!-- profile -->
					        <div class="tab-pane active" id="profile">
					            <div class="row">
					        		<div class="col-lg-3 text-center">

							            <img  src="/uploads/{{Auth::user()->avatar}}" class="img-circle" alt="Cinque Terre" width="150" height="150">

							            <div style="margin-top: 10px">
								            {{ Form::open(array('url'=>'upload', 'files'=>true)) }}
								                 <div class="col-xs-4 " style="margin-right: 10px;">
									                 {{Form::submit('Save',['class' =>  'btn btn-primary'])}}
									            </div>
								           		 <div class="col-xs-4 ">
												    <div class="form-group">
									                    {{ Form::file('avatar', '', ['class' =>  'filestyle', 'data-input'=>'false', 'data-buttonText'=>'Select Image'])}}
									                </div>
									            </div>

									        {{ Form::close() }}
								        </div>
					        		</div>
					        		<div class="col-lg-9">
					        			<ul class="list-group list-group-unbordered">
						                    <li class="list-group-item">
						                      <b>Name: </b><span class="name">{{Auth::user()->name}}</span> <a href="#" id='user-name' title='Edit'> <i class="fa fa-pencil"></i> </a>
						                    </li>
						                    <li class="list-group-item">
						                      <b>Email: </b>{{Auth::user()->email}} <a href="#" id='user-email'>  <i class="fa fa-pencil"></i> </a>
						                    </li>
						                    <li class="list-group-item">
						                      <b>Created At: </b> {{Auth::user()->created_at}}
						                    </li>
						                </ul>
					        		</div>
					        	</div>
							</div>
							 <!-- Reset Password -->
					        <div class="tab-pane " id="password">
					            <form action="{{ url('/password/reset') }}" method="post" class="form-horizontal">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
					                <div class="form-group has-feedback">
					                     <label for="password" class="col-sm-2 control-label">Password *</label>
					                     <div class="col-sm-10">
						                    <input type="password" class="form-control" placeholder="Password" id="password" name="password"/>
						                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
					                    </div>
					                </div>

					                <div class="form-group has-feedback">
					                    <label for="password_confirmation" class="col-sm-2 control-label">Confirm Password *</label>
					                    <div class="col-sm-10">
						                    <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation"/>
						                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
						                 </div>
					                </div>

					                <div class="row">
					                    <div class="col-xs-2">
					                    </div><!-- /.col -->
					                    <div class="col-xs-8">
					                        <button type="submit" class="btn btn-primary ">{{ trans('adminlte_lang::message.passwordreset') }}</button>
					                    </div><!-- /.col -->
					                    <div class="col-xs-2">
					                    </div><!-- /.col -->
					                </div>
					            </form>
							</div>
						</div>
	            </div>
	        </div>
	    </div>
	</div>
@endsection

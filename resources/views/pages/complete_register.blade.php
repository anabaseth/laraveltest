@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Edit informations</div>
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					{!! Form::open(array('action' => 'UsersController@editComplete','class'=>'form')) !!}
                                        <div class="panel-body">
                                                <div class="panel-heading">Personal informations</div>

                                                <div class="form-group">
                                                    {!! Form::label('First name') !!}
                                                    {!! Form::text('name',Auth::user()->name,  
                                                        array('required', 
                                                              'class'=>'form-control' )) !!}
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::label('last Name') !!}
                                                    {!! Form::text('lastName',Auth::user()->last_name,  
                                                        array('required', 
                                                              'class'=>'form-control' )) !!}
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::label('Email') !!}
                                                    {!! Form::text('email', Auth::user()->email, 
                                                        array('required', 
                                                              'class'=>'form-control', 
                                                              'placeholder'=>Auth::user()->email )) !!}
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::label('Activity') !!}
                                                    {!! Form::text('activity', Auth::user()->activity, 
                                                        array('required', 
                                                              'class'=>'form-control' )) !!}
                                                </div>
                                                <div class="panel-heading">Enterprise informations</div>
                                                <div class="form-group">
                                                    {!! Form::label('Enterprise name') !!}
                                                    {!! Form::text('enterpriseName', Auth::user()->enterpriseName(),
                                                        array('required', 
                                                              'class'=>'form-control',  
                                                              'placeholder'=>'Enter an enterprise name' )) !!}
                                                </div>
                                                <div class="form-group">
                                                    {!! Form::label('Enterprise Adress') !!}
                                                    {!! Form::text('enterpriseAdress', null, 
                                                        array('required', 
                                                              'class'=>'form-control',  
                                                              'placeholder'=>'Enter an enterprise adress' )) !!}
                                                </div>

                                                <div class="form-group">
                                                    {!! Form::submit('Register!', 
                                                      array('class'=>'btn btn-primary')) !!}
                                                </div>
                                                {!! Form::close() !!}
                                        </div>
			</div>
		</div>
	</div>
</div>
@endsection

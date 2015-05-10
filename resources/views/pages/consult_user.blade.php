@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">{{ Auth::user()->fullName() }} informations</div>
				<div class="panel-body">
                                    <div class="form-group">
                                            <label class="col-md-10 ">E-Mail Address</label>
                                            <div >
                                                    {{ Auth::user()->email }}
                                            </div>
                                    </div>
                                    <div class="form-group">
                                            <label class="col-md-10 ">Activity</label>
                                            <div >
                                                    {{ Auth::user()->activity }}
                                            </div>
                                    </div>
                                    <div class="form-group">
                                            <label class="col-md-10 ">Activity</label>
                                            <div >
                                                    {{ Auth::user()->activity }}
                                            </div>
                                    </div>
				</div>
			</div>
                        <div class="panel panel-default">
                            <div class="panel-heading">Enterprise informations</div>
                                <div class="form-group">
                                    <label class="col-md-10 ">Enteprise name</label>
                                    <div >
                                            {{ Auth::user()->enterpriseName() }}
                                    </div>
                                    <label class="col-md-10 ">Enteprise adress</label>
                                    <div >
                                            {{ Auth::user()->enterpriseAdress() }}
                                    </div>
                                </div>

                        </div>
		</div>
	</div>
</div>
@endsection

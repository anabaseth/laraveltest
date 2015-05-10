@extends ('app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Article</div>
                <div class="panel-body">
                    <h4>What's up doc?</h4>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    
                    {!! Form::open(array('action' => 'CommentController@postInfos','class'=>'form')) !!}
                    
                    <div class="form-group">
                        {!! Form::label('Your Comment') !!}
                        {!! Form::textarea('comment', null, 
                            array('required', 
                                  'class'=>'form-control', 
                                  'placeholder'=>'Your comment')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Comment!', 
                          array('class'=>'btn btn-primary')) !!}
                    </div>
                    {!! Form::close() !!}
                    
                                      
                @foreach(App\Comment::all() as $comment)
                    <div class="col-lg-12">
                            <small>By {!! $comment->user->fullName() !!} </small>
                        </h2>
                    </div>
                    <div class="col-lg-12">
                        <p>{!! $comment->text !!}</p>
                    </div>
                @endforeach

                <div class="col-lg-12 text-center">

                </div>

    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @if($level>0)
            <div class="alert alert-info">
            <strong>Hello,</strong>Welcome Back.
            </div>
            @endif
            @if( $error == 'y' )
            <div class="alert alert-danger">
            <strong>Wrong Answer.</strong> Try with some other answer.
            </div>           
            @endif
            @if($level>3)
            <div class="alert alert-info">
            <strong>Success</strong>You have finished.
            </div>
            @else
            <div class="panel panel-default">
                <div class="panel-heading">Level {{$level}}</div>
				<form class="form-horizontal" role="form" method="POST" action="{{ url('/game') }}">
                    {!! csrf_field() !!}
                	<div class="panel-body">
                        <div class="form-group">
                            <div class="col-md-4"></div>
                    	   <div class="col-md-6">
                                <img src="files/level{{$level}}.jpg" height="300" width="300">
                            </div>
                        </div>
                    	<div class="form-group">
                        </br>
                            <label class="col-md-4 control-label">Answer</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="answer" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-6">
                                <button type="submit" value="Submit">Submit</button>
                            </div>
                        </div>
                	</div>
            	</form>
            </div>
            @endif
        </div>
    </div>
</div>

@endsection
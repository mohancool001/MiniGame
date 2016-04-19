@extends('layouts.app')

@section('content')
<div class="alert alert-danger">
        <a href="{{ url(/) }}" class="btn btn-xs btn-danger pull-right">Go Home</a>
        <strong>Danger:</strong> You are Blacklisted. Please Contact admin.
</div>
@endsection
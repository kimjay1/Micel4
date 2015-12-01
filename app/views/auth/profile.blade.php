@extends("template.template")

@section("content")

<h3>Welcome {{ Auth::user()->fname }}!</h3>

@stop
@extends('layouts.app')

@section('content')
<h1>{{$user->name}}</h1>
<form action="{{$user->username}}/follow" method="post">
@csrf
	@if(session('succes'))
	<span class="text-success">{{session('succes')}}</span>
	@endif
	<button class="btn btn-primary">Follow</button>	
</form>
<div class="row">
@foreach($user->messages as $message)
<div class="col-6">
	@include('messages.messages')
</div>

@endforeach
</div>
@endsection

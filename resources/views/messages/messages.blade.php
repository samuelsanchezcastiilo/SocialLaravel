<img  class="img-thumbnail" src="{{$message->image}}">
<p class="cars-text">
	<div class="text-muted">escrito por: <a href="{{$message->user->username}}">
		{{ $message->user->name }}
	</a></div>
{{$message->content}}<a href="messages/{{$message->id}}"> Leer mas</a>
</p>
<div class="cars-text text-muted float-right">
	{{$message->created_at}}
</div>
	

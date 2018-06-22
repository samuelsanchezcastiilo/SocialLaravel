@extends('layouts.app')
@section('content')
        <div class="jumbotron text-center">
            <h1>Laratter</h1>
            <nav >
                <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link" href="/">Home </a></li>
                    <li class="nav-item"><a class="nav-link" href="/acerca">Acerca De nosotros</a></li>
                </ul>
                
            </nav>
        </div>
        <div class="row">
            <form class="form-group @if($errors->has('message')) has-dange @endif " action="messages/create" method="post">
                @csrf
                <input type="text" name="message" class="form-control" placeholder="Que estas Pensando?">
                @if($errors->has('message'))
                    @foreach($errors as $error)
                    <div class="form-control-feedback">{{$error}}</div>
                    @endforeach
                @endif
            </form>
        </div>
        <div class="row">
                @forelse($messages as $message)
                    <div class="col-6">
                        @include('messages.messages')
                    </div>
                    @empty
                    <div class="col-6">
                        <h1> Opps!! No hay contenido </h1>
                    </div>
                @endforelse

                @if(count($messages))
                <div class="mt-2" mx-auto>
                 {{$messages->links('pagination::bootstrap-4')}}
                </div>
                @endif
            </div>
@endsection            
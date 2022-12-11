@extends('layouts.app')

@section('content')
    @foreach ($users as $user)
        <div class="card" style="width: 18rem">
            <a href="/users/{{$user->slug}}">
                <div class="card-body">
                    <h5 class="card-title">{{$user->name}}</h5>
                    <p class="card-text">{{$user->email}}.</p>
                    <p class="card-text" >{{$user->password}}</p>
                    <div class="form-check">
                    </div>
                    <p class="card-tex"><small class="text-muted">card id is : {{$user->slug}}</small></p>
                </div>
            </a>
        </div>

    @endforeach
@endsection

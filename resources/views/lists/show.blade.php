@extends('layouts.app')

@section('content')
@foreach ($lists as $list)
<div class="card" style="width: 18rem;">
    <a href="/lists/{{$list->slug}}">
        <div class="card-body">
            <h5 class="card-title">{{$list->title}}</h5>
            <p class="card-text">{{$list->description}}.</p>
            <p class="card-tex"><small class="text-muted">card id is : {{$list->slug}}</small></p>
        </div>
    </a>
</div>



@endforeach
@endsection

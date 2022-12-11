@extends('layouts.app')
@section('content')
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{$user->title}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{$user->description}}</h6>
    </div>
</div>

@endsection

@extends('layouts.app')

@section('content')
    @foreach ($tasks as $task)
        <div class="card" style="width: 18rem;">
            <a href="/tasks/{{$task->slug}}">
                <div class="card-body">
                    <h5 class="card-title">{{$task->title}}</h5>
                    <p class="card-text">{{$task->description}}.</p>
                    <div class="form-check">
                        <input class="form-check-input z-index-2" type="checkbox" value="" id="flexCheckDefault"
                        @if ($task->done == 1)
                         checked
                        @else
                        @endif
                        >
                        <label class="form-check-label" for="flexCheckDefault">
                        </label>
                    </div>
                    <p class="card-tex"><small class="text-muted">card id is : {{$task->slug}}</small></p>
                </div>
            </a>
        </div>

    @endforeach
@endsection

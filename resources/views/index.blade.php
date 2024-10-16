@extends('layouts.app')
<h1>
    @section('title', 'Tht list of tasks')
</h1>

@section('content')
    <ul>
@forelse ($tasks as $task)
    <li>
        <a href="{{route('tasks.show', ['id' => $task->id])}}">{{$task->title}}</a>
    </li>
    @empty
    <li>There are no tasks!</li>

    @endforelse
    </ul>
@endsection

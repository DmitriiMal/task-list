@extends('layouts.app')
<h1>
    @section('title', 'Tht list of tasks')
</h1>

@section('content')
<div>
    <a href="{{route('tasks.create')}}">Add Task</a>
</div>

@forelse ($tasks as $task)

        <div>
            <a href="{{route('tasks.show', ['task' => $task->id])}}">{{$task->title}}</a>
        </div>

    @empty
    <li>There are no tasks!</li>

    @endforelse
    @if ($tasks->count())
    {{$tasks->links()}}

    @endif

@endsection

@extends('layouts.app')
<h1>
    @section('title', 'Tht list of tasks')
</h1>

@section('content')
<nav class="mb-4">
    <a href="{{route('tasks.create')}}" class="font-medium text-gray-700 underline decoration-pink-500">Add Task</a>
</nav>

@forelse ($tasks as $task)

        <div>
            <a href="{{route('tasks.show', ['task' => $task->id])}}"
                @class(['line-through text-gray-500' => $task->completed])>{{$task->title}}</a>
        </div>

    @empty
    <li>There are no tasks!</li>

    @endforelse
    @if ($tasks->count())
    {{$tasks->links()}}

    @endif

@endsection

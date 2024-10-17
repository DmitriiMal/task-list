@extends('layouts.app')
<h1>
    @section('title', 'Tht list of tasks')
</h1>

@section('content')

@forelse ($tasks as $task)

        <div><a href="{{route('tasks.show', ['task' => $task->id])}}">{{$task->title}}</a></div>

    @empty
    <li>There are no tasks!</li>

    @endforelse
    @if ($tasks->count())
    {{$tasks->links()}}

    @endif

@endsection

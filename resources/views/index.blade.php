@extends("layout.app")

@section("title", "Hello world")

@section("content")
@if (count($tasks))
@foreach ($tasks as $task)
<div><a href="{{ route('tasks.show', ['id' => $task->id])}}">{{ $task->title }}</a></div>
@endforeach
@else
<div>Missing tasks.</div>
@endif
@endsection
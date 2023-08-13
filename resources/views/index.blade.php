<h1>Hello world</h1>

<div>
    @if (count($tasks))
    @foreach ($tasks as $task)
    <div><a href="{{ route('tasks.show', ['id' => $task->id])}}">{{ $task->title }}</a></div>
    @endforeach
    @else
    <div>Missing tasks.</div>
    @endif
</div>

<h1>ToDoアプリ</h1>
<form action="{{ route('todo.store') }}" method="post">
    @csrf
    
    <textarea name="content" id="content" cols="50" rows="5">{{ old('content') }}</textarea>
    <button type="submit" class="rounded bg-blue-500">作成</button>
</form>

@foreach ($posts as $post)
    {{ $post->content }}
    <a href="{{ route('todo.create') }}" class="text-blue-500">編集</a>
    <a href="{{ route('todo.create') }}" class="text-red-500">削除</a>
@endforeach

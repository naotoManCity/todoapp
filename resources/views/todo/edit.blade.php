<h1>ToDoアプリ</h1>
<form action="{{ route('todo.update', ['post' => $post->id]) }}" method="post">
    @csrf
    
    <textarea name="content" id="content" cols="50" rows="5">{{ old('content', $post->content) }}</textarea>
    <button type="button" class="rounded bg-gray-500" onclick="history.back()">戻る</button>
    <button type="submit" class="rounded bg-blue-500">更新</button>
</form>

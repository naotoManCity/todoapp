<head>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<div class="container px-5 py-24 mx-auto">
    <div class="lg:w-2/3 w-full mx-auto overflow-auto">
        <h1 class="text-center sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">TODOアプリ</h1>
        <div class="text-center">
            <form action="{{ route('todo.update', ['post' => $post->id]) }}" method="post">
                @csrf
                <textarea name="content" id="content" cols="50" rows="5" class="rounded">{{ old('content', $post->content) }}</textarea><br>
                <button type="submit" class="my-2 ml-auto text-white bg-gray-500 border-0 py-2 px-6 focus:outline-none hover:bg-gray-600 rounded" onclick="history.back()">戻る</button>
                <button type="submit" class="my-2 ml-auto text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded">更新</button>
            </form>
        </div>
    </div>
</div>
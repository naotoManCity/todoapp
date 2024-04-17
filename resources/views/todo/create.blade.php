<head>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<div class="container px-5 py-24 mx-auto">
    <div class="lg:w-2/3 w-full mx-auto overflow-auto">
        <h1 class="text-center sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">TODOアプリ</h1>
        <div class="text-center">
            <form action="{{ route('todo.store') }}" method="post">
                @csrf
                <textarea name="content" id="content" cols="50" rows="5" class="rounded">{{ old('content') }}</textarea><br>
                <button type="submit" class="my-2 ml-auto text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded">作成</button>
            </form>
        </div>
        <table class="table-auto w-full text-center items-center whitespace-no-wrap">
            <thead>
                <tr>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">メモ内容</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">編集</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br">削除</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td class="border-t-2 border-gray-200 px-4 py-3">{{ $post->content }}</td>
                        <td class="border-t-2 border-gray-200 px-4 py-3">
                            <form action="{{ route('todo.edit', ['post' => $post->id]) }}" method="get">
                                <button class="text-white bg-blue-500 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded">編集</button>
                            </form>
                        </td>
                        <td class="border-t-2 border-gray-200 px-4 py-3">
                            <form action="{{ route('todo.destroy', ['post' => $post->id]) }}" method="post">
                                @csrf
                                <button class="text-white bg-red-500 py-2 px-6 focus:outline-none hover:bg-red-600 rounded">削除</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
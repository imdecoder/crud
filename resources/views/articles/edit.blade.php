<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Makale Düzenle</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
</head>
<body>
    <div class="container max-w-full mx-auto pt-4" style="width: 900px">
        <form action="/articles/{{ $article->id }}" method="post">
            
            @method('PUT')

            @csrf

            <div class="mb-4">
                <label for="title" class="font-bold text-gray-800">
                    Başlık:
                </label>
                <input type="text" name="title" value="{{ $article->title }}" class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full">
            </div>
            <div class="mb-4">
                <label for="title" class="font-bold text-gray-800">
                    İçerik:
                </label>
                <textarea name="content" class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0">{{ $article->content }}</textarea>
            </div>
            <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">
                Kaydet
            </button>
            <a href="/articles" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">
                İptal
            </a>
            <form action="/articles/{{ $article->id }}">
                
                @csrf

                @method('DELETE')

                <button class="ml-4 bg-red-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">
                    Sil
                </button>
            </form>
        </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Makale Oluştur</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
</head>
<body>
    <div style="width: 900px;" class="container max-w-full mx-auto pt-4">
        <form method="POST" action="/articles">
            
            @csrf

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="title">
                    Başlık:
                </label>
                <input name="title" class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0">
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="content">
                    İçerik:
                </label>
                <textarea name="content" class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0"></textarea>
            </div>
            <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">
                Oluştur
            </button>
            <a href="/articles" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">
                İptal
            </a>
        </form>
    </div>
</body>
</html>
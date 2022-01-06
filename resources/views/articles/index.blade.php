<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Makaleler</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
</head>
<body>
    <div class="container max-w-full mx-auto pt-4" style="width: 900px">
        
    <a href="/articles/create" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">
        Makale Ekle
    </a>

        @foreach($articles as $article)

            <article class="mb-4">
                <h2 class="text-xl font-bold text-gray-900">
                    <a href="/articles/{{ $article->id }}/edit">
                        {{ $article->title }}
                    </a>
                </h2>
                <p class="text-md text-gray-600">
                    {{ $article->content }}
                </p>
                <hr class="mt-2">
            </article>

        @endforeach

    </div>
</body>
</html>
<?php

namespace App\Http\Controllers;

use App\Models\Articles;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Articles::all();

        return view('articles.index', ['articles' => $articles]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        request()->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Articles::create([
            'title' => request('title'),
            'content' => request('content')
        ]);

        return redirect('/articles');
    }

    public function edit(Articles $article)
    {
        return view('articles.edit', ['article' => $article]);
    }

    public function update(Articles $article)
    {
        request()->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $article->update([
            'title' => request('title'),
            'content' => request('content'),
        ]);

        return redirect('/articles');
    }

    public function destroy(Articles $article)
    {
        $article->delete();

        return redirect('/articles');
    }
}

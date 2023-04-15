<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\News_elem;

class NewsController extends Controller
{
    public function edit()
    { 
        $news_elems = News_elem::find(1);
        return view('news.edit', compact('news_elems'));
    }

    public function update()
    { 
        $data = request()->validate([
            "title" => "string",
            "subtitle" => "string",
            "img_url" => "string",
            "name_content" => "string",
            "content" => "string",
        ]);

        $news_elems = News_elem::find(1);
        $news_elems->update($data);

        return redirect()->route('news.edit');
    }
}

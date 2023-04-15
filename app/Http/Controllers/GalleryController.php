<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Gallery_elem;

class GalleryController extends Controller
{
    public function edit()
    { 
        $gallery_elems = Gallery_elem::find(1);
        return view('gallery.edit', compact('gallery_elems'));
    }


    public function update()
    { 
        $data = request()->validate([
            "title" => "string",
            "subtitle" => "string",
        ]);

        $gallery_elems = Gallery_elem::find(1);
        $gallery_elems->update($data);

        return redirect()->route('gallery.edit');
    }
}

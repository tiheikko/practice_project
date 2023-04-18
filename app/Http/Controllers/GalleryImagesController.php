<?php

namespace App\Http\Controllers;

use App\Models\Gallery_image;
use App\Models\Category;

use Illuminate\Http\Request;

class GalleryImagesController extends Controller
{

    public function index()
    {
        $all_pics = Gallery_image::all();

        return view('gallery_images.index', compact('all_pics'));
    }


  
    public function edit(Gallery_image $gallery_image)
    {   
        $categories = Category::all();
        return view('gallery_images.edit', compact('gallery_image', 'categories'));
    }



    public function update(Request $request, Gallery_image $gallery_image)
    {
        $data = request()->validate([
            'img_url' => 'string',
            'category_id' => 'int'
        ]);



        $pic = Gallery_image::find($gallery_image->id);
        $pic->update($data);

        return redirect()->route('gallery_images.index');
    }


    public function create() {
        $categories = Category::all();
        return view('gallery_images.create', compact('categories'));
    }


    public function store(Request $request) {
        $data = request()->validate([
            'img_url' => 'string',
            'category_id' => 'int'
        ]);

        Gallery_image::create($data);

        return redirect()->route('gallery_images.index');
    }

    public function destroy(Gallery_image $gallery_image) {
        $gallery_image->delete();
        return redirect()->route('gallery_images.index');
    }

}

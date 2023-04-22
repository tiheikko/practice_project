<?php

namespace App\Http\Controllers;

use App\Models\Gallery_image;
use App\Models\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        // $data = request()->validate([
        //      'category_id' => 'int'
        // ]);

        $file = $request->file('img');
        $img_url = "/images/gallery/" . $file->getClientOriginalName();
        $category_id = $request->category_id;


        $file->move(public_path() . "/images/gallery/", $file->getClientOriginalName());

        $pic = Gallery_image::find($gallery_image->id);
        $pic->update(['img_url' => $img_url, 'category_id' => $category_id]);

        return redirect()->route('gallery_images.index');
    }


    public function create() {
        $categories = Category::all();
        return view('gallery_images.create', compact('categories'));
    }


    public function store(Request $request) {
        $file = $request->file('img');
        $img_url = "/images/gallery/" . $file->getClientOriginalName();
        $category_id = $request->category_id;


        $file->move(public_path() . "/images/gallery/", $file->getClientOriginalName());


        Gallery_image::create(['img_url' => $img_url, 'category_id' => $category_id]);

        return redirect()->route('gallery_images.index');
    }

    public function destroy(Gallery_image $gallery_image) {
        $image = Gallery_image::findOrFail($gallery_image->id);

        unlink(public_path() . $image->img_url);
        
        $image->delete();

        return redirect()->route('gallery_images.index');
    }

}

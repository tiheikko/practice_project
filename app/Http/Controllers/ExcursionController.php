<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Excursion_elem;

class ExcursionController extends Controller
{
    public function edit()
    { 
        $excursion_elems = Excursion_elem::find(1);
        return view('excursion.edit', compact('excursion_elems'));
    }


    public function update()
    { 
        $data = request()->validate([
            "title" => "string",
            "subtitle" => "string",
            "img_url" => "string"
        ]);

        $excursion_elems = Excursion_elem::find(1);
        $excursion_elems->update($data);

        return redirect()->route('excursion.edit');
    }
}

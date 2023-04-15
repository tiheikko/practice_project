<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Slider_elem;

class SliderController extends Controller
{
    public function edit()
    { 
        $slider_elems = Slider_elem::find(1);
        return view('slider.edit', compact('slider_elems'));
    }


    public function update()
    { 
        $data = request()->validate([
            "title" => "string",
            "description" => "string",
            "button_name" => "string",
        ]);

        $slider_elems = Slider_elem::find(1);
        $slider_elems->update($data);

        return redirect()->route('slider.edit');
    }
}

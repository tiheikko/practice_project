<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Nav_elem;

class NavController extends Controller
{

   
    public function edit()
    { 
        $nav_elems = Nav_elem::find(1);
        return view('nav.edit', compact('nav_elems'));
    }

   
    public function update() {
        $data = request()->validate([
            "logo_url" => "string",
            "link1" => "string",
            "link2" => "string",
            "link3" => "string"
        ]);

        $nav_elems = Nav_elem::find(1);
        $nav_elems->update($data);

        return redirect()->route('nav.edit');
    }

}

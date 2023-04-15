<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Footer_elem;

class FooterController extends Controller
{
    public function edit()
    { 
        $footer_elems = Footer_elem::find(1);
        return view('footer.edit', compact('footer_elems'));
    }

    public function update()
    { 
        $data = request()->validate([
            "logo_url" => "string",
            "about_company" => "string",
            "subtitle" => "string",
            "company" => "string",
            "address" => "string",
            "email" => "string",
            "by" => "string",
        ]);

        $footer_elems = Footer_elem::find(1);
        $footer_elems->update($data);

        return redirect()->route('footer.edit');
    }
}

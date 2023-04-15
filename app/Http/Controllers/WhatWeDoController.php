<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\What_we_do_elem;

class WhatWeDoController extends Controller
{
    public function edit()
    { 
        $what_we_do_elems = What_we_do_elem::find(1);
        return view('what_we_do.edit', compact('what_we_do_elems'));
    }

    public function update()
    { 
        $data = request()->validate([
            "title" => "string",
            "subtitle" => "string",
            "content1_title" => "string",
            "content2_title" => "string",
            "content1" => "string",
            "content2" => "string",
        ]);

        $what_we_do_elems = What_we_do_elem::find(1);
        $what_we_do_elems->update($data);

        return redirect()->route('what_we_do.edit');
    }
}

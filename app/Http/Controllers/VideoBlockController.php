<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Video_block_elem;

class VideoBlockController extends Controller
{
    public function edit()
    { 
        $video_block_elems = Video_block_elem::find(1);
        return view('video_block.edit', compact('video_block_elems'));
    }


    public function update()
    { 
        $data = request()->validate([
            "title" => "string",
            "subtitle" => "string",
        ]);

        $video_block_elems = Video_block_elem::find(1);
        $video_block_elems->update($data);

        return redirect()->route('video_block.edit');
    }
}

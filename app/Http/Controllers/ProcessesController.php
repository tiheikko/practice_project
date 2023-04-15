<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Processes_elem;

class ProcessesController extends Controller
{
    public function edit()
    { 
        $processes_elems = Processes_elem::find(1);
        return view('processes.edit', compact('processes_elems'));
    }


    public function update()
    { 
        $data = request()->validate([
            "title" => "string",
            "subtitle" => "string",
            "content" => "string",
            "point1" => "string",
            "point2" => "string",
            "point3" => "string",
            "point4" => "string",
        ]);

        $processes_elems = Processes_elem::find(1);
        $processes_elems->update($data);

        return redirect()->route('processes.edit');
    }
}

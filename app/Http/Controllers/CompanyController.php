<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Company_elem;

class CompanyController extends Controller
{
    public function edit()
    { 
        $company_elems = Company_elem::find(1);
        return view('company.edit', compact('company_elems'));
    }

    public function update()
    { 
        $data = request()->validate([
            "title" => "string",
            "subtitle" => "string",
            "img_left_url" => "string",
            "img_right_url" => "string",
            "content" => "string",
        ]);

        $company_elems = Company_elem::find(1);
        $company_elems->update($data);

        return redirect()->route('company.edit');
    }
}

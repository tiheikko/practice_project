<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\ContactForm;
use App\Models\Nav_elem;
use App\Models\Footer_elem;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nav_elems = Nav_elem::find(1);
        $footer_elems = Footer_elem::find(1);
        return view('contact_form.index', compact('nav_elems', 'footer_elems'));
    }

    public function index_error()
    {
        $nav_elems = Nav_elem::find(1);
        $footer_elems = Footer_elem::find(1);
        return view('contact_form.index_error', compact('nav_elems', 'footer_elems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $phone = request()->phone;
        $email = request()->email;

        $user_exist = DB::table('users')->where('phone', $phone)->orWhere('email', $email)->get()->count();

        if ($user_exist === 1) {
            return redirect()->route('contact.index_error');
        } else {
            $data = request()->validate([
            "name" => "string",
            "phone" => "string",
            "email" => "string",
            "theme" => "string",
            "message" => "string"
             ]);

            ContactForm::create($data);

            return redirect()->route('contact.index');
        }

    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;


use App\Models\User;
use App\Models\ContactForm;

use App\Mail\ContactMail;



class AdminContactFormController extends Controller
{
    public function index() {
        $forms = ContactForm::paginate(10);
        return view('admin_contact_form.index', compact('forms'));
    }


    public function search(Request $request) {
        $search = '%' . request()->search . '%';

        $forms = DB::table('contact_forms')->where('name', 'like', $search)->
                                            orWhere('phone', 'like', $search)->
                                            orWhere('email', 'like', $search)->
                                            orWhere('theme', 'like', $search)->
                                            orWhere('message', 'like', $search)->
                                            orWhere('created_at', 'like', $search)->
                                            paginate(10);

        return view('admin_contact_form.index', compact('forms'));
    }



    public function sort() {
        $forms = DB::table('contact_forms')->orderBy('created_at', 'asc')->paginate(10);

        return view('admin_contact_form.index', compact('forms'));
    }



    public function sort_desc() {
        $forms = DB::table('contact_forms')->orderBy('created_at', 'desc')->paginate(10);

        return view('admin_contact_form.index', compact('forms'));
    }




    public function register(Request $request) {
        $info = ContactForm::find(request()->id);

        $username = $info->name;
        $phone = $info->phone;
        $email = $info->email;
        $theme = $info->theme;

        $faker = \Faker\Factory::create();
        $password = $faker->regexify('[A-Za-z0-9]{10}');

        $hashed_password = Hash::make('1111');
        
        User::create([
            'name' => $username,
            'phone' => $phone,
            'email' => $email,
            'theme' => $theme,
            'password' => $hashed_password
        ]);

        $message = new \stdClass();
        $message->name = $username;
        $message->password = $password;

        Mail::to($email)->send(new ContactMail($message));


        $info->delete();

        

        return redirect()->route('admin.requests');
    }




    public function destroy(Request $request) {
        ContactForm::find(request()->id)->delete();

        return redirect()->route('admin.requests');
    }
}

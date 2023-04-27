<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Models\ContactForm;


class AdminContactFormController extends Controller
{
    public function index() {
        $forms = ContactForm::paginate(10);
        return view('admin_contact_form.index', compact('forms'));
    }


    public function search(Request $request) {
        $search = '%' . request()->search . '%';

        $forms = DB::table('contact_forms')->where('name', 'like', $search)->orWhere('phone', 'like', $search)->orWhere('email', 'like', $search)->orWhere('theme', 'like', $search)->orWhere('message', 'like', $search)->orWhere('created_at', 'like', $search)->paginate(10);

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
}

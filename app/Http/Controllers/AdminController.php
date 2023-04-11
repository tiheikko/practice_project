<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Nav_elem;
use App\Models\Slider_elem;
use App\Models\What_we_do_elem;
use App\Models\Excursion_elem;
use App\Models\Video_block_elem;
use App\Models\Gallery_elem;
use App\Models\Gallery_pic;
use App\Models\News_elem;
use App\Models\Company_elem;
use App\Models\Processes_elem;
use App\Models\Footer_elem;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }


    //PAGES WITH EDITING CONTENT OF PAGES
    public function edit()
    {
        return view('admin.edit');
    }

    public function edit_nav()
    { 
        $nav_elems = Nav_elem::find(1);
        return view('admin.edit_nav', compact('nav_elems'));
    }

    public function edit_slider()
    { 
        $slider_elems = Slider_elem::find(1);
        return view('admin.edit_slider', compact('slider_elems'));
    }

    public function edit_what_we_do()
    { 
        $what_we_do_elems = What_we_do_elem::find(1);
        return view('admin.edit_what_we_do', compact('what_we_do_elems'));
    }

    public function edit_excursion()
    { 
        $excursion_elems = Excursion_elem::find(1);
        return view('admin.edit_excursion', compact('excursion_elems'));
    }

    public function edit_video_block()
    { 
        $video_block_elems = Video_block_elem::find(1);
        return view('admin.edit_video_block', compact('video_block_elems'));
    }

    public function edit_gallery()
    { 
        $gallery_elems = Gallery_elem::find(1);
        return view('admin.edit_gallery', compact('gallery_elems'));
    }

    public function edit_news()
    { 
        $news_elems = News_elem::find(1);
        return view('admin.edit_news', compact('news_elems'));
    }

    public function edit_company()
    { 
        $company_elems = Company_elem::find(1);
        return view('admin.edit_company', compact('company_elems'));
    }

    public function edit_processes()
    { 
        $processes_elems = Processes_elem::find(1);
        return view('admin.edit_processes', compact('processes_elems'));
    }

    public function edit_Footer()
    { 
        $footer_elems = Footer_elem::find(1);
        return view('admin.edit_footer', compact('footer_elems'));
    }




    //UPDATING CONTENT OF PAGES
    public function update_nav() {
        $data = request()->validate([
            "logo_url" => "string",
            "link1" => "string",
            "link2" => "string",
            "link3" => "string"
        ]);

        $nav_elems = Nav_elem::find(1);
        $nav_elems->update($data);

        return redirect()->route('admin.edit_nav');
    }


    public function update_slider()
    { 
        $data = request()->validate([
            "title" => "string",
            "description" => "string",
            "button_name" => "string",
        ]);

        $slider_elems = Slider_elem::find(1);
        $slider_elems->update($data);

        return redirect()->route('admin.edit_slider');
    }


    public function update_what_we_do()
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

        return redirect()->route('admin.edit_what_we_do');
    }


    public function update_excursion()
    { 
        $data = request()->validate([
            "title" => "string",
            "subtitle" => "string",
            "img_url" => "string"
        ]);

        $excursion_elems = Excursion_elem::find(1);
        $excursion_elems->update($data);

        return redirect()->route('admin.edit_excursion');
    }


    public function update_video_block()
    { 
        $data = request()->validate([
            "title" => "string",
            "subtitle" => "string",
        ]);

        $video_block_elems = Block4_elem::find(1);
        $video_block_elems->update($data);

        return redirect()->route('admin.edit_video_block');
    }


    public function update_gallery()
    { 
        $data = request()->validate([
            "title" => "string",
            "subtitle" => "string",
        ]);

        $gallery_elems = Gallery_elem::find(1);
        $gallery_elems->update($data);

        return redirect()->route('admin.edit_gallery');
    }


    public function update_news()
    { 
        $data = request()->validate([
            "title" => "string",
            "subtitle" => "string",
            "img_url" => "string",
            "name_content" => "string",
            "content" => "string",
        ]);

        $news_elems = News_elem::find(1);
        $news_elems->update($data);

        return redirect()->route('admin.edit_news');
    }

    public function update_company()
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

        return redirect()->route('admin.edit_company');
    }


    public function update_processes()
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

        return redirect()->route('admin.edit_processes');
    }


    public function update_Footer()
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

        return redirect()->route('admin.edit_footer');
    }
}

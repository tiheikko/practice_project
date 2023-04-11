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

class PageController extends Controller
{
    public function index() {
        $nav_elems = Nav_elem::find(1);
        $slider_elems = Slider_elem::find(1);
        $what_we_do_elems = What_we_do_elem::find(1);
        $excursion_elems = Excursion_elem::find(1);
        $gallery_elems = Gallery_elem::find(1);
        $video_block_elems = Video_block_elem::find(1);
        $news_elems = News_elem::find(1);
        $company_elems = Company_elem::find(1);
        $processes_elems = Processes_elem::find(1);
        $footer_elems = Footer_elem::find(1);

        return view('main.index', compact('nav_elems', 'slider_elems', 'what_we_do_elems', 'excursion_elems', 'video_block_elems', 'gallery_elems', 'news_elems', 'company_elems',
            'processes_elems', 'footer_elems'));
    }
}

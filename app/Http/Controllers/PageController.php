<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Nav_elem;
use App\Models\Block1_elem;
use App\Models\Block2_elem;
use App\Models\Block3_elem;
use App\Models\Block4_elem;
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
        $block1_elems = Block1_elem::find(1);
        $block2_elems = Block2_elem::find(1);
        $block3_elems = Block3_elem::find(1);
        $gallery_elems = Gallery_elem::find(1);
        $block4_elems = Block4_elem::find(1);
        $news_elems = News_elem::find(1);
        $company_elems = Company_elem::find(1);
        $processes_elems = Processes_elem::find(1);
        $footer_elems = Footer_elem::find(1);

        return view('main.index', compact('nav_elems', 'block1_elems', 'block2_elems', 'block3_elems', 'block4_elems', 'gallery_elems', 'news_elems', 'company_elems',
            'processes_elems', 'footer_elems'));
    }
}

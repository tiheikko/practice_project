<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Video_block_elem extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'video_block_elems';
    protected $guarded = []; 
}

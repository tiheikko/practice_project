<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class What_we_do_elem extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'what_we_do_elems';
    protected $guarded = []; 
}

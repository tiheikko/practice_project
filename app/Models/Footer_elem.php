<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Footer_elem extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'footer_elems';
    protected $guarded = []; 
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nav_elem extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'nav_elems';
    protected $guarded = []; 
}

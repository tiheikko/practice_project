<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Block4_elem extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'block4_elems';
    protected $guarded = []; 
}

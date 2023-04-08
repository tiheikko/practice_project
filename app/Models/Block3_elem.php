<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Block3_elem extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'block3_elems';
    protected $guarded = []; 
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Excursion_elem extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'excursion_elems';
    protected $guarded = []; 
}

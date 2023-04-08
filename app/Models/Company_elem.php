<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company_elem extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'company_elems';
    protected $guarded = []; 
}

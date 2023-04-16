<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Category;

class Gallery_image extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'gallery_images';
    protected $guarded = []; 

    public function category() {
        return $this->belongsTo(Category::class);
    }
}

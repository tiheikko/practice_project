<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Order;

class Good extends Model
{
    use HasFactory;

    protected $table = 'goods';
    protected $guarded = [];

    public function orders() {
        return $this->belongsToMany(Order::class);
    }
}

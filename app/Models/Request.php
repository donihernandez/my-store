<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Request extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['deleted_at'];

    protected $fillable = [
        'cart_id',
        'delivery_time'
    ];

    public function cart() {
        return $this->hasOne(Cart::class);
    }
}

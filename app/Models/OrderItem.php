<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    const SCOOP_VARIATION = 100;
    const TOPPING_VARIATION = 50;

    protected $fillable = [
        'rockyroad',
        'cookiesandcream',
        'chocolate',
        'vanilla',
        'sprinkles',
        'caramel',
        'eminems',
        'cherries',
        'cone',
        'name',
        'order_id'
    ];
}

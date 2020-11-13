<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    const TAX_RATE = 0.0825;

    protected $fillable = [
        'ipaddress',
        'email',
        'name',
        'total',
        'subtotal',
        'tax'
    ];

    public function items() {
        return $this->hasMany(OrderItem::class);
    }

}

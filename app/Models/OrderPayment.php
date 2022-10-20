<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderItem;

class OrderPayment extends Model
{
    use HasFactory;
    protected $table = 'order_payment';

    public function OrderItems() 
    {
        return $this -> hasMany(OrderItem::class);
    }
}

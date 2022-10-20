<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Checkout extends Model
{
    protected $table = "order_payment";
    use HasFactory;

    /**
     * Get the products that owns the OrderItem
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sets(): BelongsTo
    {
        return $this ->belongsTo(Set::class,'set_id','id');
    }
}

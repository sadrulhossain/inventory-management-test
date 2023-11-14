<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductStock extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id', 'quantity', 'unit_price'
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function productDispatchLotWise()
    {
        return $this->hasMany(ProductDispatchLotWise::class, 'product_stock_id', 'id');
    }
}

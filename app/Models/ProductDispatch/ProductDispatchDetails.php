<?php

namespace App\Models\ProductDispatch;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDispatchDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_dispatch_id', 'product_id', 'quantity'
    ];

    public function productDispatch(): BelongsTo
    {
        return $this->belongsTo(ProductDispatch::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function productDispatchLotWise()
    {
        return $this->hasMany(ProductDispatchLotWise::class, 'product_dispatch_details_id', 'id');
    }
}

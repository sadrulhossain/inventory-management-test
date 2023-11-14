<?php

namespace App\Models\ProductDispatch;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDispatchLotWise extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_dispatch_details_id', 'product_stock_id', 'quantity', 'unit_price', 'total_price'
    ];

    public function productDispatchDetails(): BelongsTo
    {
        return $this->belongsTo(ProductDispatchDetails::class);
    }

    public function productStock(): BelongsTo
    {
        return $this->belongsTo(ProductStock::class);
    }
}

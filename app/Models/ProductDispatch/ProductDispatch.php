<?php

namespace App\Models\ProductDispatch;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDispatch extends Model
{
    use HasFactory;

    protected $fillable = [
        'reference', 'date'
    ];

    public function productDispatchDetails()
    {
        return $this->hasMany(ProductDispatchDetails::class, 'product_dispatch_id', 'id');
    }
}

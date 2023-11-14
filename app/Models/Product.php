<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function productStock(): HasMany
    {
        $this->hasMany(ProductStock::class, 'product_id', 'id');
    }

    public function productDispatchDetails()
    {
        return $this->hasMany(ProductDispatchDetails::class, 'product_id', 'id');
    }
}

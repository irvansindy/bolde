<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Product;

class Variant extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'variant';

    protected $fillable = [
        'variant_name',
        'product_id',
        'variant_description',
        'variant_price',
        'photo'
    ];

    protected $hidden = [];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}

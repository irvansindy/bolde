<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Categories;
use App\Models\Variant;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'product';

    protected $fillable = [
        'product_name',
        'description',
        'category_id',
        'top_product'
    ];

    protected $hidden = [];

    public function categories()
    {
        return $this->belongsTo(Categories::class, 'id');
    }

    public function variant()
    {
        return $this->hasMany(Variant::class, 'product_id');
    }
}

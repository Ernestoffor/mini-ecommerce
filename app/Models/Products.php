<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    protected $table = 'products';
    protected $fillable = [
        'name',
        'image',
        'price',
        'quantity',
        'category_name'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}

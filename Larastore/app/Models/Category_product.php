<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category_product extends Model
{
    protected $table = 'Category_product';
    use HasFactory;
    
    protected $fillable = [
        'product_id',
        'category_id'
    ];

   

}

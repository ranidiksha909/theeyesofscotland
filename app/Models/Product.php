<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";

    protected $fillable = [
        'cat_id',
        'location_id',
        'title',
        'sub_title',
        'description',
        'img_url',
        'iframe',
        'sort_order',
        'status'
    ];

    public function location(){
        return $this->hasOne(Location::class,'id','location_id');
    }

    public function category()
    {
        return $this->hasOne(Category::class,'id','cat_id');
    }
}

<?php

namespace App\Models;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resources extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'name',
        'description',
        'qty_stock',
        'price',
        'category_id',
    ];


    public function category()
    {
       return $this->hasOne(Category::class, 'id', 'category_id');
    }
}

<?php

namespace App\Models;
use App\Models\Resources;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'name',
        'description'
    ];

    public function resource()
    {
        return $this->hasMany(Resources::class);
    }
}

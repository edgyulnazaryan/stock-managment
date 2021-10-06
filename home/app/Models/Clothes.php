<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clothes extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'title',
        'size',
        'image',
        'quantity',
        'employer_id',
        'color',
    ];

    public function employer()
    {
        return $this->hasOne(Employer::class, 'id', 'employer_id');
    }
}

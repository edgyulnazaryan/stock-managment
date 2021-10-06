<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'manager_id',
        'clothes_id',
        'total'
    ];

    public function manager()
    {
        return $this->hasOne(Manager::class, 'id', 'manager_id');
    }

    public function clothes()
    {
        return $this->hasOne(Clothes::class, 'id', 'clothes_id');
    }
}

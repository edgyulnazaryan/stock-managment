<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;
    protected $fillable =
    [
      'first_name',
      'last_name',
      'email',
      'phone_number',
      'location_id',
    ];

    public function location()
    {
        return $this->hasOne(Location::class, 'id', 'location_id');
    }

}

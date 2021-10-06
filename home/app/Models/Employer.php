<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'first_name',
        'last_name',
        'phone_number',
        'email',
        'job_id',
        'location_id',
    ];

    public function job()
    {
        return $this->hasOne(Job::class, 'id', 'job_id');
    }
    public function location()
    {
        return $this->hasOne(Location::class, 'id', 'location_id');
    }

}

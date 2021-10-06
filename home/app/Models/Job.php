<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'job_title',
        'salary',
    ];

    public function employeer()
    {
        return $this->hasOne(Employer::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'product_id',
        'customer_id',
        'manager_id',
        'quantity',
        'price',
    ];

    public function product()
    {
        return $this->hasMany(Clothes::class, 'id', 'product_id');
    }

    public function customer()
    {
        return $this->hasMany(Customer::class, 'id', 'customer_id');
    }

    public function manager()
    {
        return $this->hasMany(Manager::class, 'id', 'manager_id');
    }
}

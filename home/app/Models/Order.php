<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'product_name',
        'product_qty',
        'supplier_id',
        'manager_id',
        'total',
        'status',
    ];

    public function supplier()
    {
        return $this->hasOne(Supplier::class, 'id', 'supplier_id');
    }

    public function resource()
    {
        return $this->hasOne(Resources::class, 'id', 'product_name');
    }

    public function manager()
    {
        return $this->hasOne(Manager::class, 'id', 'manager_id');
    }
}

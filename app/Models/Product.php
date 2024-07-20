<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'quantity',
        'price',
        'color'
    ];

    /******************************
     *** RELATIONSHIPS
     ******************************/
    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class)->withPivot(['quantity', 'price', 'deleted']);
    }

    public function carts(): BelongsToMany
    {
        return $this->belongsToMany(Cart::class)->withPivot(['quantity', 'deleted']);
    }
}

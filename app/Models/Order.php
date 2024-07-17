<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    protected $fillable = [
        'client_id',
        'reference'
    ];

    /******************************
     *** RELATIONSHIPS
     ******************************/
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class)->withPivot(['quantity', 'price', 'deleted']);
    }
}

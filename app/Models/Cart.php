<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Cart extends Model
{
    /******************************
     *** RELATIONSHIPS
     ******************************/
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class)->withPivot(['quantity', 'deleted']);
    }
}

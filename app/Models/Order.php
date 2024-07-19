<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    protected $fillable = [
        'client_id',
        'reference',
        'amount',
    ];

    /******************************
     *** RELATIONSHIPS
     ******************************/
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function products($all = false): BelongsToMany
    {
        $query = $this->belongsToMany(Product::class)->withPivot(['quantity', 'deleted']);
        if (!$all) {
            $query->wherePivot('deleted', false);
        }
        return $query;
    }
}

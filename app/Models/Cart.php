<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Cart extends Model
{
    /******************************
     *** RELATIONSHIPS
     ******************************/
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function products($all = false): BelongsToMany
    {
        $query = $this->belongsToMany(Product::class)->withPivot(['quantity', 'deleted'])->orderBy('deleted');
        if (!$all) {
            $query->wherePivot('deleted', false);
        }
        return $query;
    }

    /******************************
     *** ATTRIBUTES
     ******************************/
    protected function total(): Attribute
    {
        return Attribute::make(
            get: fn($value, array $attributes) => $this->products()->get()->map(
                fn ($product) => $product->price * $product->pivot->quantity
            )->sum(),
        );
    }

    protected function quantity(): Attribute
    {
        return Attribute::make(
            get: fn($value, array $attributes) => $this->products()->get()->map(
                fn ($product) => $product->pivot->quantity
            )->sum(),
        );
    }

    /******************************
     *** HELPERS
     ******************************/
    public function delete()
    {
        $this->products(all: true)->detach();
        return parent::delete();
    }

    public function toArray()
    {
        return array_merge(parent::toArray(), [
            'total' => $this->total,
            'quantity' => $this->quantity,
        ]);
    }
}

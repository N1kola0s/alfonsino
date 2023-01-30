<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Restaurant extends Model
{   
    //relazione 'One to many' con tabella products. Un prodotto appartiene ad un ristorante, ad un ristorante appartengono più prodotti.
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}

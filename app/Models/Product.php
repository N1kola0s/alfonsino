<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{   
    //relazione 'One to many' con la tabella Restaurants. Un prodotto appartiene ad un ristorante, ad un ristorante appartengono più prodotti.
    public function restaurant(): BelongsTo
    {
        return $this->belongsTo(Restaurant::class);
    }
    
}

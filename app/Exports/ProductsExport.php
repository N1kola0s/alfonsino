<?php

namespace App\Exports;

use App\Models\Product;
use App\Models\Restaurant;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {   
       //restituisce tutti i prodotti con id del ristorante corrspondente;
        return Product::all();
     
    }
}

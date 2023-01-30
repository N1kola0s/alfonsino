<?php

namespace App\Exports;

use App\Models\Restaurant;
use Maatwebsite\Excel\Concerns\FromCollection;

class RestaurantsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Restaurant::all();
    }
}

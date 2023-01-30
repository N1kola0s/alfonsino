<?php

namespace App\Imports;

use App\Models\Restaurant;
use Maatwebsite\Excel\Concerns\ToModel;

class RestaurantsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Restaurant([
            //
        ]);
    }
}

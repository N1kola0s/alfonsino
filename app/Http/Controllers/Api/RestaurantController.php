<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;


class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //salva nella variabile tutti i ristoranti
        /* $restaurants = Restaurant::all(); */

        //salva nella variabile tutti i ristoranti con i relativi prodotti
        $restaurants = Restaurant::with(['products'])->get();

        //ritorna dati in formato json
        return response()->json([
            'status_code' => 200,
            'status_text' => 'success',
            'restaurants' => $restaurants

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          //crea l'istanza del modello
          $restaurant = new Restaurant();

          //assegna i valori alle proprietà del modello
          $restaurant->name = $request->name;
          $restaurant->p_iva = $request->p_iva;
          $restaurant->visibility = $request->visibility;
         
          //salva il modello
  
          $restaurant->save(); 

          //ritorna json
          return response()->json([
            'status_code' => 200,
            'status_text' => 'success',
            'restaurants' => $restaurant

        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

   /*  public function export() 
    {
        return Excel::download(new RestaurantsExport, 'restaurant.csv');
    } */
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarsController extends Controller
{
    //
    public function list()
    {

    }

    public function create()
    {
      return view('/cars/create');
    }

    public function save(Request $r)
    {
    /*  Car::create([
        "brand" => $_POST['brand'],
        "model" => $_POST['model'],
        "year" => $_POST['year'],
        "category_id" => $_POST['category_id']
      ]);
      */
      Car::create($r->all());

      return redirect()->route('cars.list');
    }
}

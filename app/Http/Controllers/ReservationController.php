<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ListAvailableCategoriesRequest;
use Validator;

class ReservationController extends Controller
{
    //
    public function index()
    {
      $locations = App/Location::all();
      return view('reservation/reservationIndex')->withLocations($locations);
    }

    public function list(ListAvailableCategoriesRequest $req)
    {
        return view('reservation/list');
    }
}

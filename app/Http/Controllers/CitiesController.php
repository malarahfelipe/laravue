<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cities;

class CitiesController extends Controller {

  public function getCities(Request $request) {
    $cities = Cities::all();

    return $cities;
  }

}

<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function citiesByState($state_id)
    {
        $cities = City::select('id', 'name as label')->where('state_id', $state_id)->get();
        return response()->json(['cities' => $cities]);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}

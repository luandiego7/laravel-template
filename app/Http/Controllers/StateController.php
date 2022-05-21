<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function states()
    {
        $states = State::all();

        return response()->json(['states' => $states]);
    }

    public function select2States()
    {
        $states = State::select('id', 'name as label')->get();
        return response()->json(['states' => $states]);
    }
}

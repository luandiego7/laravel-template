<?php

namespace App\Http\Controllers;

use App\Helpers\Files;
use App\Helpers\Format;
use App\Http\Requests\User\ProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use File;

class UserController extends Controller
{
    public function profile(ProfileRequest $request)
    {
        $data             = $request->except('state_id');
        $data['birthday'] = is_null($request->birthday) ? null : Format::dateBrToUs($request->birthday);
        $user             = User::where('id', auth()->user()->id)->first();
        $user->update($data);

        if($user->city){
            $user = Arr::add($user, 'state_id', $user->city->state->id);
        }

        return response()->json(['user' => $user]);
    }

    public function photo(Request $request)
    {
        if($request->photo){
            $user = auth()->user();
            if(!is_null($user->photo)){
                File::delete(public_path('/images/'.explode('images/', $user->photo)[1]));
            }

            $path = 'images/users';

            $user->photo =  url(Files::uploadPhoto($request, 'photo', $path));
            $user->save();

            return response()->json(['user' => $user]);
        }

        return 'não foi';
    }
}

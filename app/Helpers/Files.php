<?php
namespace App\Helpers;


use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Intervention\Image\ImageManagerStatic as Image;
use File;

class Files
{

    public static function uploadPhoto($request, $input, $path)
    {
        $extension = $request[$input]->extension();

        if($extension == "jpg" or $extension == "jpeg" or $extension == "png"){
            $name = Files::randomName($request, $input);
            $path = $path . '/'. $name;

            $image_resize = Image::make($request->file($input)->getRealPath());
            $image_resize->resize(600, 600);
            $image_resize->save(public_path($path));

            return $path;
        }
    }


    static function randomName($request, $input)
    {
        $name = $request->file($input)->getClientOriginalName();
        $type = $request->file($input)->getClientOriginalExtension();
        $time = '-' . implode('-', explode(':', now()->toTimeString())) . '.';
        return md5($name) . $time . $type;
    }

}

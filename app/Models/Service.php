<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    public static $service ,$imageName, $imageFile, $imageDirectory, $imageUrl;

    public static function createService($request){

        self::$imageFile = $request->File('image');
        if (self::$imageFile)
        {

            self::$imageName        = rand(10, 1000).self::$imageFile->getClientOriginalName();
            self::$imageDirectory   = 'back/image/upload/';
            self::$imageFile->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl         = self::$imageDirectory.self::$imageName;

        }

        self::$service               = new Service();
        self::$service->name         = $request->name;
        self::$service->description  = $request->description;
        self::$service->image        = self::$imageUrl;
        self::$service->status       = $request->status;
        self::$service->save();
    }

    public static function updateService($request , $id){

        self::$service   = service::find($id);
        self::$imageFile = $request->File('image');
        if (self::$imageFile)
        {


            if (file_exists(self::$service->image))
            {
                unlink(self::$service->image);
            }
            self::$imageName        = rand(10, 1000).self::$imageFile->getClientOriginalName();
            self::$imageDirectory   = 'back/image/upload/';
            self::$imageFile->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl         = self::$imageDirectory.self::$imageName;

        } else{

            self::$imageUrl = self::$service->image;

}

        self::$service->name         = $request->name;
        self::$service->description  = $request->description;
        self::$service->image        = self::$imageUrl;
        self::$service->status       = $request->status;
        self::$service->save();
    }
}

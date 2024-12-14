<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request, $id)
    {
        
        $name = "Donald Trump";
        $age = "75";

        // create the data array
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

        // Set cookie 
        $name = 'access_token';
        $value = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $request->getHost(); 
        $secure = false;
        $httpOnly = true;

       
        $cookie = cookie(
            $name,
            $value,
            $minutes,
            $path,
            $domain,
            $secure,
            $httpOnly
        );

        // Return response with data and cookie
        return response()->json($data, 200)->cookie($cookie);
    }
}



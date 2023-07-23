<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function login()
    {
        return inertia('Index/Login' ,
        [
            'data' => 'this is the content of the data'
        ]);
    }

    public function register()
    {
        return inertia('Index/Register');
    }

  
}

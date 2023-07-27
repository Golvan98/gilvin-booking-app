<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
class IndexController extends Controller
{
    public function index()
    {
        

        return inertia('Index/Home',
        [
            'data' => 'this is the content of the data'
        ]);
    }

    public function show()
    {
        return inertia('Index/Show');
    }

    public function yawa()
    {
        return inertia('Index/yawa');
    }




}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function show()
    {
        return view('helloworld', [
            'name' => 'View',
            'test' => rand (-1, 1)
        ]);
    }
}

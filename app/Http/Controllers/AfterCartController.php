<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AfterCartController extends Controller
{
    public function success()
    {
        return view('welcome');
    }

    public function failure()
    {
        return view('welcome');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function registro()
    {
        return view('/auth/register');
    }
}
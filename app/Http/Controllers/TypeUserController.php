<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypeUserController extends Controller
{
    public function index()
    {
        return view('tipo-usuario.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $name = 'Baiba'; 
        return view('page', [
            'name' => $name,
        ]);
    }
}

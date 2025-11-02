<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index()
    {
        $headerData = [
            ["url" => "Home", "title" => "Home"],
            ["url" => "About", "title" => "About"],
            ["url" => "Services", "title" => "Services"],
            ["url" => "Contact", "title" => "Contact"],
        ];

        return view('main', compact('headerData'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainViewController extends Controller
{
    public function index()
    {
      return view('mainview/main');
    }

    public function home()
    {
      return view('mainview/home');
    }

    public function item($id)
    {
        return view('mainview/item', ['itemshown' => $id]);
    }
}

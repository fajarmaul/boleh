<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class MainViewController extends Controller
{
    public function main()
    {
      return view('mainview/main');
    }

    public function landing()
    {
      return view('mainview/landing');
    }

    public function getOleh()
    {
      $items = Item::where('type', 0)->get();     //first kalo spesifik 1 dang, misal fajar  , kalo all buat ambil semua data
      return view('mainview/landing', compact('items'));
    }

    public function getMakanan()
    {
      $items = Item::where('type', 1)->get();
      return view('mainview/landing', compact('items'));
    }

    public function item($id)
    {
        return view('mainview/item', ['itemshown' => $id]);
    }

    public function login()
    {
        return view('auth/login');
    }

    public function admin()
    {
      return view('mainview/admin');
    }

    public function dashboard()
    {
      return view('mainview/dashboard');
    }
}

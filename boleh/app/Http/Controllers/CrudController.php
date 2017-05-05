<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

$users = DB::table('users')->get();

class CrudController extends Controller
{
  public function update($id)
  {

  }

  public function delete()
  {

  }
}

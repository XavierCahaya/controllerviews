<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
  public function index()
  {
    $name = 'Xavier';
    $campus = 'UNAKI';
    $location= 'Semarang';
    $home = 'Genuk (Kota Semarang)';
    $hobby = 'Hobby ku Badminton dan Game Online';


    return view('profile/index', compact('name', 'campus', 'location', 'home', 'hobby'));
  }
}

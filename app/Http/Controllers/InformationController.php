<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $campusname = 'UNAKI';
    $location= 'Semarang';
    $campuslocation = 'Jln. Imam Bonjol No. 15-17 Semarang ; Kabupaten/Kota, : Kota Semarang';
    $fakultas ='Teknik Dan Informatika, Ekonomi Dan Bisnis, Bahasa Dan Budaya, Psikologi';

    return view('information/index', compact('campusname', 'location', 'campuslocation','fakultas'));
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RealisationController extends Controller
{
   public function realisation()
   {
   	return view('realisations');
   }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class ApiController extends Controller
{
   public function index() {
      return  $sliders = Slider::all();
   }
}

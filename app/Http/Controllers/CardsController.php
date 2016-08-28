<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
//use DB;
use App\Card;

class CardsController extends Controller
{
    public function index() {
        // Build query directly in controller
        // Requires 'use DB;' added to controller.
        // Instead we are using the Card model which extends model.
      //$cards = DB::table('cards')->get();
      $cards = Card::get();
      return view('cards/index', compact('cards'));
    }
}

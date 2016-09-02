<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
//use DB;

//using the Card model from the App directory.
use App\Card;

class CardsController extends Controller
{
    public function index() {
        // Build query directly in controller.
        // Requires 'use DB;' added to controller.
        // Instead we are using the Card model which extends model.
        //$cards = DB::table('cards')->get();
        $cards = Card::get();

        return view('cards/index', compact('cards'));
    }

    //use type hinting to specify (hint) at what class we are expecting.
    public function show(Card $card)
    {
        //after using type hinting, we no longer need to set the card variable
        //using the model find. This is found automatically.
        //$card = Card::find($card);
        //$card = $card->notes[0]->user;

        //eager load the notes and users associated with the card.
        $card = $card->load('notes.user');

        //return $card;
        return view('cards/show', compact('card'));
    }
}

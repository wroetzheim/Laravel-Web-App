<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

//using the Card model from the App directory.
use App\Card;

class CardsController extends Controller
{
    public function index() {
        $cards = Card::get();

        return view('cards/index', compact('cards'));
    }

    //use type hinting to specify (hint) at what class we are expecting.
    public function show(Card $card)
    {
        //eager load the notes and users associated with the card.
        $card = $card->load('notes.user');

        //return $card;
        return view('cards/show', compact('card'));
    }

    public function store(Request $request) {
        //title field is required and must be min 5 characters.
        $rules = ['title' => 'required|min:5'];
        $this->validate($request, $rules);

        //save a new card based on the request parameters.
        //$card = new Card(['body' => $request->body, 'title' => $request->title]);
        //$card->save();
        $cardParameters = ['body' => $request->body, 'title' => $request->title];
        $card = Card::create($cardParameters);
        flash('Card Created', 'success');
        return back();
    }
}

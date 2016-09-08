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

		//eager load the users associated with the card.
		$cards = $cards->load('user');
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

    	//make sure the user is signed in before storing.
		$user = $request->user();
		if (!$user) {
			flash('You must be logged in to add a recipe.', 'error');
			return back();
		}
        //title field is required and must be min 5 characters.
        $rules = ['title' => 'required|min:5', 'description' =>'required', 'file' => 'required'];
        $this->validate($request, $rules);

		//store the image
		$file = $request->file('file');
		$filename = time(). '-' . $file->getClientOriginalName();
		$directory = 'images/recipe/';
		$request->file('file')->storeAs($directory, $filename, 's3', 'public');
		//$file->move(public_path().$directory, $filename);
		$path = $directory.$filename;

        //save a new card based on the request parameters.
        //$card = new Card(['body' => $request->body, 'title' => $request->title]);
        //$card->save();
        //$cardParameters = ['description' => $request->description, 'title' => $request->title];
        //$card = Card::create($cardParameters);
		$card = new Card(['description' => $request->description, 'title' => $request->title]);
		$card->user_id = $user->id;
		$card->file = $path;
		$card->save();
        flash('Recipe created', 'success');
        return back();
    }

	public function update(Request $request, Card $card)
	{
		//make sure the user is signed in before updating.
		$user = $request->user();
		if (!$user) {
			flash('You must be logged in to add a recipe.', 'error');
			return back();
		}
		else if ($user->id !== $card->user_id) {
			flash('Only the recipe creator can update.', 'error');
			return back();
		}
		$card->body = $request->body;
		$card->save();
		flash('Recipe updated.', 'success');
		return back();
    }
}

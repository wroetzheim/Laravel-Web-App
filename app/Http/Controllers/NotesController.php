<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Card;
use App\Note;

class NotesController extends Controller
{
    //save a note to the database.
    public function store(Request $request, Card $card)
    {
        //the request() function used to get request data.

        //method one for storing the note.
        // $note = new Note;
        // $note->body = request()->body;
        // //use the CardController notes method to save the note to the card.
        // $card->notes()->save($note);

        //method two for storing the note.
        //instead of the explicit assignment above, we will pass the fields directly.
        //$note = new Note(['body' => $request()->body]);
        // //use the CardController notes method to save the note to the card.
        // $card->notes()->save($note);

        //method three for storing a note
        //use the NotesController create method and pass in the request body.
        //$card->notes()->create(['body' => request()->body]);

        //method four, create the note when passing the parameter to save()
        //$card->notes()->save(new Note(['body' => request()->body]));

        //finally, method five for storing a note
        //use the CardController addNote() method.
        //@param Note $note, User $user


        //body field is required and must be min 10 characters.
        $rules = ['body' => 'required|min:10'];
        $this->validate($request, $rules);
        $note = new Note(['body' => $request->body]);
        $user = $request->user();
        //die, dump $user
        //dd($user);
        //pass the user and the note to the addNote method of the Card model.
        $card->addNote($note, $user);

        return back();
        //return redirect();
    }


    public function edit(Note $note)
    {
        return view('notes/edit', compact('note'));

    }

    public function update(Note $note)
    {
        $note->update(request()->all());
        return back();
    }
}

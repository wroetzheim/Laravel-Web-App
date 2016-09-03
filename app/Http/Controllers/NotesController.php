<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Card;
use App\Note;

class NotesController extends Controller
{
    //save a note to the database.
    /**
     * Store a note.
     * Set the request information to add a note to a card.
     * Use the CardController addNote() method.
     * @param Note $note, User $user
     */
    public function store(Request $request, Card $card)
    {

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
        flash('note updated', 'success');
        return back();
    }
}

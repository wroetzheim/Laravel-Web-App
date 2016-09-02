<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{

    //create a slug from the title using Laravel's str_slug function
    public function createSlug() {
        return $this->slug = str_slug($this->id.'-'.$this->title, '-');
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    //create a function to add a note to a Card
    //@param: Note $note, User $user (Note object and User object)
    public function addNote(Note $note, User $user)
    {
        $note->user_id = $user->id;
        return $this->notes()->save($note);
    }
}

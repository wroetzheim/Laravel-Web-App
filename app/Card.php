<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{

    protected $fillable = ['title', 'body', 'description', 'file'];

    //create a slug from the title using Laravel's str_slug function
    public function createSlug() {
        return $this->slug = str_slug($this->id.'-'.$this->title, '-');
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }

	public function user()
	{
		//Card belongs to User.
		return $this->belongsTo(User::class);
	}

    /**
     * Add a note to a Card
     * @param Note $note, User $user
     *
     */
    public function addNote(Note $note, User $user)
    {
        //set the user id for the note.
        $note->user_id = $user->id;
        //save the note.
        return $this->notes()->save($note);
    }
}

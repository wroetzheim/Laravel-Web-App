<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    //Explicitly state which fields can accept user input.
    protected $fillable = ['body'];

    public function card()
    {
        //Note belongs to Card.
        return $this->belongsTo(Card::class);
    }

    public function user()
    {
        //Note belongs to User.
        return $this->belongsTo(User::class);
    }
}

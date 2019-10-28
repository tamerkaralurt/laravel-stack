<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['title', 'body'];
    //$question = Question::find(1);
    //$question->user->email; gibi kullanılacak.
    public function user(){
        return $this->belongsTo(User::class);
    }
}

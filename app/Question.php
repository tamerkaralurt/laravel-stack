<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Str;

class Question extends Model
{
    protected $fillable = ['title', 'body'];
    //$question = Question::find(1);
    //$question->user->email; gibi kullanılacak.
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function getUrlAttribute()
    {
        return route("questions.show", $this->id);
    }

    public function getCreatedDateAttribute()
    {
        // return $this->created_at->forma('d.m.Y');
        return $this->created_at->diffForHumans();
    }
}

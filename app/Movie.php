<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Genre;
use App\Actor;

class Movie extends Model
{
    public function getTitle(){
        echo "El titulo es: ".$this->title;
    }

    public function calificacion(){
        if($this->rating > 8){
            return "Es muy buena!";
        }else{
            return "Ni la mires...";
        }
    }

    public function genre(){
        return $this->belongsTo(Genre::class,'genre_id');
    }

    public function actors(){
        return $this->belongsToMany(Actor::class,'actor_movie','movie_id','actor_id');
    }

}

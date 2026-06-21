<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $guarded = [];

    //uno a uno con llave foranea (teams table has president_id)
    public function president()
    {
       return $this->belongsTo(President::class);
    }

    // Relacion Uno a Muchos 
    public function players()
    {
        return $this->hasMany(Player::class);
    }

    public function games()
    {
       return $this->belongsToMany(Game::class, 'team_games');
    }
}
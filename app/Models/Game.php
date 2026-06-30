<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function teams()
    {
       return $this->belongsToMany(Team::class, 'team_games');
    }

    public function goals()
    {
       return $this->hasMany(Goal::class);
    }
    //------------------------------------------------------------
 public function scopeIncluded(Builder $query){
       
        if(empty($this->allowIncluded)||empty(request('included'))){
            return;
        }
        $relations = explode(',', request('included'));
       
        $allowIncluded=collect($this->allowIncluded);
        foreach($relations as $key => $relationship){
            
            if(!$allowIncluded->contains($relationship)){
                unset($relations[$key]);
            }
        
        }

        $query->with($relations);
 }
 

public function scopeFilter(Builder $query){

}


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class President extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $allowIncluded = ['team'];

    //  Relacion Uno A Uno (president has one team, since teams.president_id references this)
    public function team()
    {
        return $this->hasOne(Team::class); 
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

<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Team;
use App\Models\President;
use App\Models\Goal;
use App\Models\Player;

use Illuminate\Http\Request;

class ConsultasController extends Controller
{
    
     public function index1()
    {
        return Team::with('president')->get();
    }
    public function index2()
    {
        return Player::with('goals')->get();
    }
    public function index3()
    {
        return Game::with('goals.player')->get();
    }
    public function index4()
    {
        return Game::with(['teams','goals.player'])->get();
}
    public function index5()
    {
        return President::with(['teams','goals.player'])->get();
}
}

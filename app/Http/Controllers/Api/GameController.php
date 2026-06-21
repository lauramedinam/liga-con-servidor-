<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        return Game::with(['teams', 'goals.player'])->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
        ]);

        return Game::create($request->all());
    }

    public function show($id)
    {
        return Game::with(['teams', 'goals.player'])->findOrFail($id);
    }

    public function update(Request $request, Game $game)
    {
        $game->update($request->all());
        return $game;
    }

    public function destroy(Game $game)
    {
        $game->delete();
        return $game;
    }
}

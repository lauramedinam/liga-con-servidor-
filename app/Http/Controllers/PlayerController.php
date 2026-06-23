<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index()
    {
        return Player::with('goals')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'team_id' => 'required|exists:teams,id',
        ]);

        return Player::create($request->all());
    }

    public function show($id)
    {
        return Player::with('goals')->findOrFail($id);
    }

    public function update(Request $request, Player $player)
    {
        $player->update($request->all());
        return $player;
    }

    public function destroy(Player $player)
    {
        $player->delete();
        return $player;
    }
}

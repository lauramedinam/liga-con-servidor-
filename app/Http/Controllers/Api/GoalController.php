<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Goal;
use Illuminate\Http\Request;

class GoalController extends Controller
{
    public function index()
    {
        return Goal::with(['game', 'player'])->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'minute' => 'required|integer',
            'game_id' => 'required|exists:games,id',
            'player_id' => 'required|exists:players,id',
        ]);

        return Goal::create($request->all());
    }

    public function show($id)
    {
        return Goal::with(['game', 'player'])->findOrFail($id);
    }

    public function update(Request $request, Goal $goal)
    {
        $goal->update($request->all());
        return $goal;
    }

    public function destroy(Goal $goal)
    {
        $goal->delete();
        return $goal;
    }
}

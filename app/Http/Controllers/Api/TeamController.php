<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        return Team::with('president')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'president_id' => 'required|exists:presidents,id',
        ]);

        return Team::create($request->all());
    }

    public function show($id)
    {
        return Team::with('president')->findOrFail($id);
    }

    public function update(Request $request, Team $team)
    {
        $team->update($request->all());
        return $team;
    }

    public function destroy(Team $team)
    {
        $team->delete();
        return $team;
    }
}

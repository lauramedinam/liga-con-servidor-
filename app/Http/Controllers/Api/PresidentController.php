<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\President;
use Illuminate\Http\Request;

class PresidentController extends Controller
{
    public function index()
    {
        return President::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'year' => 'required|integer',
        ]);

        return President::create($request->all());
    }

    public function show($id)
    {
        return President::findOrFail($id);
    }

    public function update(Request $request, President $president)
    {
        $request->validate([
            'name' => 'required|max:255',
            'year' => 'required|integer',
        ]);

        $president->update($request->all());

        return $president;
    }

    public function destroy(President $president)
    {
        $president->delete();
        return $president;
    }
}

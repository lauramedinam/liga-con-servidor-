<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\President;
use Illuminate\Http\Request;

class PresidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $presidents = President::all();
        return $presidents;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'year' => 'required|date',
        ]);

        $president = President::create($request->all());

        return $president;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $president = President::included()->findOrFail($id);
        return $president;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\President  $president
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, President $president)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'year' => 'required|date',
        ]);

        $president->update($request->all());

        return $president;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\President  $president
     * @return \Illuminate\Http\Response
     */
    public function destroy(President $president)
    {
        $president->delete();
        return $president;
    }
}

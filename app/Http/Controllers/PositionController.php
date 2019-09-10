<?php

namespace App\Http\Controllers;

use App\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index', [
            'table' => [
                'name' => 'Pozicije',
                'action' => 'positions',
                'tHeads' => ['id' => '#', 'firstname' => 'Ime', 'lastname' => 'Prezime', 'positions' => 'Pozicije'],
                'tRows' => []
            ]
        ]);
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $position = new Position();

        $position->name = 'hello';

        return view('save', ['position' => $position]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        // dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function destroy(Position $position)
    {
        //
    }
}

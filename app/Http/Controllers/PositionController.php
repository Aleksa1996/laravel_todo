<?php

namespace App\Http\Controllers;

use App\Http\Requests\Position as PositionRequest;
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
                'tHeads' => ['id' => '#', 'name' => 'Ime pozicije'],
                'tRows' => Position::all()
            ]
        ]);
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function show($id = null, Request $request)
    {
        $position = $id ?  Position::find($id) : new Position();

        return view('save', ['model' => $position]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function save($id = null, PositionRequest $request)
    {
        $validated = $request->validated();
        $position = $id ?  Position::find($id) : new Position();
        $position->fill($validated);

        if ($position->save()) {
            $request->session()->flash('message', 'Uspesno sacuvano!');
            return redirect('positions');
        }

        $request->session()->flash('message', 'Greska pri cuvanju!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Position  $position
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Position::destroy($id)) {
            request()->session()->flash('message', 'Uspesno izbrisano!');
        }

        return redirect('positions');
    }
}

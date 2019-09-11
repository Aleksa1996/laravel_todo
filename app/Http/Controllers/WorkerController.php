<?php

namespace App\Http\Controllers;

use App\Worker;
use App\Http\Requests\Worker as WorkerRequest;
use Illuminate\Http\Request;

class WorkerController extends Controller
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
                'name' => 'Zaposleni',
                'action' => 'workers',
                'tHeads' => ['id' => '#', 'firstname' => 'Ime', 'lastname' => 'Prezime'],
                'tRows' => Worker::all()
            ]
        ]);
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function show($id = null, Request $request)
    {
        $worker = $id ?  Worker::find($id) : new Worker();

        return view('save', ['model' => $worker]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function save($id = null, WorkerRequest $request)
    {
        $validated = $request->validated();
        $worker = $id ?  Worker::find($id) : new Worker();
        $worker->fill($validated);

        if ($worker->save()) {
            $request->session()->flash('message', 'Uspesno sacuvano!');
            return redirect('workers');
        }

        $request->session()->flash('message', 'Greska pri cuvanju!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Worker::destroy($id)) {
            request()->session()->flash('message', 'Uspesno izbrisano!');
        }

        return redirect('workers');
    }
}

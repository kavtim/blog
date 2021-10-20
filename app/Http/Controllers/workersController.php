<?php

namespace App\Http\Controllers;

use App\Worker;

use Illuminate\Http\Request;

class workersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $people = Worker::all();
        return view('workers.index',['person'=>$people]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function show(Worker $worker)
    {
        //
        $persons = Worker::find($worker->id);
            
        return view('workers.show',['dets'=>$persons]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function edit(Worker $worker)
    {
        //
        $select = Worker::find($worker->id);
        return view('workers.edit',['wkr'=>$select]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Worker $worker)
    {
        //
            $updatess = Worker::where('id',$worker->id)->update([
                'name'=> $request->input('name'),
                'location' => $request->input('location')


            ]);
            if($updatess){
                $search = Worker::find($worker->id);
                return view('workers.show',['dets' => $search]);
            }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Worker $worker)
    {
        //
            $remove = Worker::find($worker->id)->delete();

            return redirect()->route('workers.index');



    }
}

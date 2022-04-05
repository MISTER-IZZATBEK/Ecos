<?php

namespace App\Http\Controllers;


use App\Http\Requests\ClientsRequest;
use App\Models\Clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
//     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $clients=Clients::all();
//        return view('clients.index',compact('clients'));
        $clients=Clients::all();
        return response()->json([
            'clients'=>$clients
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
//     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       Clients::create($request->all());
        return redirect()->route('clients.index')->with('message','Client created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clients  $clients
//     * @return \Illuminate\Http\Response
     */
    public function show(Clients $clients)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function edit(Clients $clients)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clients $clients)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clients $clients)
    {
        //
    }
}

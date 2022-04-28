<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEconomicActivity;
use App\Models\EconomicActivity;
use Illuminate\Http\Request;

class EconomicActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actividades = EconomicActivity::orderBy('id','desc')->paginate(5);

        return view('economicactivities.index', compact('actividades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('economicactivities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEconomicActivity $request)
    {
        EconomicActivity::create($request->all()); 

        return redirect()->route('economicactivities.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($actividad)
    {
        $actividad = EconomicActivity::find($actividad);
        return view('economicactivities.edit', compact('actividad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreEconomicActivity $request, $actividad)
    {
        $actividad = EconomicActivity::find($actividad);
        $actividad->update($request->all());
        return redirect()->route('economicactivities.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($actividad)
    {
        $actividad = EconomicActivity::find($actividad);
        $actividad->delete();
        return redirect()->route('economicactivities.index');
    }
}

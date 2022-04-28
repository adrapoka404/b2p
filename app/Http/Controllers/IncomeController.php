<?php

namespace App\Http\Controllers;

use App\Models\Income;
use App\Http\Requests\StoreIncome;

use Illuminate\Http\Request;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingresos = Income::orderBy('id', 'desc')->paginate(5);

        return view('incomes.index', compact('ingresos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('incomes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIncome $request)
    {
        Income::create($request->all()); 

        return redirect()->route('incomes.index');
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
    public function edit($ingreso)
    {
        $ingreso = Income::find($ingreso);
        return view('incomes.edit', compact('ingreso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreIncome $request, $ingreso)
    {
        $ingreso = Income::find($ingreso);
        $ingreso->update($request->all());
        return redirect()->route('incomes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($ingreso)
    {
        $ingreso = Income::find($ingreso);
        $ingreso->delete();
        return redirect()->route('incomes.index');
    }
}

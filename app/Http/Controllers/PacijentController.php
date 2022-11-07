<?php

namespace App\Http\Controllers;

use App\Models\Pacijent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PacijentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacijenti = Pacijent::all();

        return response()->json(['Pacijenti' => $pacijenti]);
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
        $validator = Validator::make($request->all(), [
            'ime' => 'required|string',
            'prezime' => 'required|string',
            'broj_telefona' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $noviPacijent = Pacijent::create([
            'ime' => $request->ime,
            'prezime' => $request->prezime,
            'broj_telefona' => $request->broj_telefona
        ]);

        return response()->json(['Novi pacijent sačuvan u bazi podataka. ' => $noviPacijent]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pacijent  $pacijent
     * @return \Illuminate\Http\Response
     */
    public function show(Pacijent $pacijent)
    {
        $pacijent = Pacijent::find($pacijent);

        return response()->json(['Pacijent' => $pacijent]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pacijent  $pacijent
     * @return \Illuminate\Http\Response
     */
    public function edit(Pacijent $pacijent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pacijent  $pacijent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pacijent $pacijent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pacijent  $pacijent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pacijent $pacijent)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Golongan;
use App\Http\Requests\StoreGolonganRequest;
use App\Http\Requests\UpdateGolonganRequest;

class GolonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $golongans = Golongan::all();

        return view('golongan.index', [
            'golongans' => $golongans,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('golongan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGolonganRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGolonganRequest $request)
    {
        $golongan = Golongan::create($request->validated());

        return to_route('dashboard.golongan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Golongan  $golongan
     * @return \Illuminate\Http\Response
     */
    public function show(Golongan $golongan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Golongan  $golongan
     * @return \Illuminate\Http\Response
     */
    public function edit(Golongan $golongan)
    {
        return view('golongan.edit', [
            'golongan' => $golongan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGolonganRequest  $request
     * @param  \App\Models\Golongan  $golongan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGolonganRequest $request, Golongan $golongan)
    {
        $golongan->update($request->validated());

        return redirect()->route('dashboard.golongan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Golongan  $golongan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Golongan $golongan)
    {
        $golongan->delete();

        return redirect()->route('dashboard.golongan.index');
    }
}

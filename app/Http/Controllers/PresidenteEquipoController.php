<?php

namespace App\Http\Controllers;

use App\Models\PresidenteEquipo;
use Illuminate\Http\Request;

/**
 * Class PresidenteEquipoController
 * @package App\Http\Controllers
 */
class PresidenteEquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //paginate()->
        $presidenteEquipos = PresidenteEquipo::paginate();

        return view('presidente_equipos.index', compact('presidenteEquipos'))
            ->with('i', (request()->input('page', 1) - 1) * $presidenteEquipos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $presidenteEquipos = new PresidenteEquipo();
        return view('presidente_equipos.create', compact('presidenteEquipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //request()->validate(PresidenteEquipo::$rules);

        $presidenteEquipos = PresidenteEquipo::create($request->all());

        return redirect()->route('presidente_equipos.index')
            ->with('success', 'PresidenteEquipo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $presidenteEquipos = PresidenteEquipo::find($id);

        return view('presidente_equipos.show', compact('presidenteEquipos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $presidenteEquipos = PresidenteEquipo::find($id);

        return view('presidente_equipos.edit', compact('presidenteEquipos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  PresidenteEquipo $presidenteEquipos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PresidenteEquipo $presidenteEquipos)
    {
        //request()->validate(PresidenteEquipo::$rules);

        $presidenteEquipos->update($request->all());

        return redirect()->route('presidente_equipos.index')
            ->with('success', 'PresidenteEquipo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $presidenteEquipos = PresidenteEquipo::find($id)->delete();

        return redirect()->route('presidente_equipos.index')
            ->with('success', 'PresidenteEquipo deleted successfully');
    }
}

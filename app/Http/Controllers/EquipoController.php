<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

/**
 * Class EquipoController
 * @package App\Http\Controllers
 */
class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipos = Equipo::paginate();

        return view('equipos.index', compact('equipos'))
            ->with('i', (request()->input('page', 1) - 1) * $equipos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipos = new Equipo();
        return view('equipos.create', compact('equipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //request()->validate(Equipo::$rules);

        $equipos = Equipo::create($request->all());
        $equipos->save();

        return redirect()->route('equipos.index')
            ->with('success', 'Equipo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equipos = Equipo::find($id);

        return view('equipos.show', compact('equipos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipos = Equipo::findOrFail($id);
        $equipos->save();

        return view('equipos.edit', compact('equipos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Equipo $equipos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipo $equipos)
    {
        //request()->validate(Equipo::$rules);

        $equipos->update($request->all());
        $equipos->save();

        return redirect()->route('equipos.index')
            ->with('success', 'Equipo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $equipos = Equipo::find($id)->delete();

        return redirect()->route('equipos.index')
            ->with('success', 'Equipo deleted successfully');
    }
}

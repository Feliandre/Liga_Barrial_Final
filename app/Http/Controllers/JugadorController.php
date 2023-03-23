<?php

namespace App\Http\Controllers;

use App\Models\Jugador;
use Illuminate\Http\Request;

/**
 * Class JugadorController
 * @package App\Http\Controllers
 */
class JugadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jugadors = Jugador::paginate();

        return view('jugadors.index', compact('jugadors'))
            ->with('i', (request()->input('page', 1) - 1) * $jugadors->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jugadors = new Jugador();
        return view('jugadors.create', compact('jugadors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //request()->validate(Jugador::$rules);

        $jugadors = Jugador::create($request->all());

        return redirect()->route('jugadors.index')
            ->with('success', 'Jugador created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jugadors = Jugador::find($id);

        return view('jugadors.show', compact('jugadors'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jugadors = Jugador::find($id);
        $jugadors->save();

        return view('jugadors.edit', compact('jugadors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Jugador $jugadors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jugador $jugadors)
    {
        //request()->validate(Jugador::$rules);

        $jugadors->update($request->all());
        $jugadors->save();

        return redirect()->route('jugadors.index')
            ->with('success', 'Jugador updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $jugadors = Jugador::find($id)->delete();

        return redirect()->route('jugadors.index')
            ->with('success', 'Jugador deleted successfully');
    }
}

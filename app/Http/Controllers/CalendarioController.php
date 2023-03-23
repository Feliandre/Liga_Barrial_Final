<?php

namespace App\Http\Controllers;

use App\Models\Calendario;
use Illuminate\Http\Request;

/**
 * Class CalendarioController
 * @package App\Http\Controllers
 */
class CalendarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calendarios = Calendario::paginate();

        return view('calendarios.index', compact('calendarios'))
            ->with('i', (request()->input('page', 1) - 1) * $calendarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $calendarios = new Calendario();
        return view('calendarios.create', compact('calendarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //request()->validate(Calendarios::$rules);

        $calendarios = Calendario::create($request->all());

        return redirect()->route('calendarios.index')
            ->with('success', 'Calendario created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $calendarios = Calendario::find($id);

        return view('calendarios.show', compact('calendarios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $calendarios = Calendario::find($id);

        return view('calendarios.edit', compact('calendarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Calendario $calendarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Calendario $calendarios)
    {
        //request()->validate(Calendario::$rules);

        $calendarios->update($request->all());

        return redirect()->route('calendarios.index')
            ->with('success', 'Calendario updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $calendarios = Calendario::find($id)->delete();

        return redirect()->route('calendarios.index')
            ->with('success', 'Calendario deleted successfully');
    }
}

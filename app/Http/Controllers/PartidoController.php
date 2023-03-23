<?php

namespace App\Http\Controllers;

use App\Models\Partido;
use Illuminate\Http\Request;
use Carbon\Carbon;
/**
 * Class PartidoController
 * @package App\Http\Controllers
 */
class PartidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partidos = Partido::paginate();

        return view('partidos.index', compact('partidos'))
            ->with('i', (request()->input('page', 1) - 1) * $partidos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $partidos = new Partido();
        return view('partidos.create', compact('partidos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Obtener la fecha del partido del formulario
    $fecha = $request->input('fecha');
    
    // Obtener la fecha actual
    $fecha_actual = Carbon::now();
    
    // Obtener el número de semana del año de la fecha actual
    $semana_actual = $fecha_actual->weekOfYear;
    
    // Obtener el número de semana del año de la fecha del partido
    $semana_partido = Carbon::parse($fecha)->weekOfYear;
    
    // Comparar el número de semana del partido con el número de semana actual
    if ($semana_partido == $semana_actual) {
        // El partido se puede ingresar porque es de la semana actual
        // Insertar el partido en la base de datos
        $partidos = new Partido;
        $partidos->fecha = $fecha;
        $partidos->torneo_id = $request->input('torneo_id');
        $partidos->goles_local = $request->input('goles_local');
        $partidos->goles_visitante = $request->input('goles_visitante');
        $partidos->equipo_local_id = $request->input('equipo_local_id');
        $partidos->equipo_visitante_id = $request->input('equipo_visitante_id');
        $partidos->hora = $request->input('hora');
        $partidos->save();
        
        // Redirigir al usuario a la lista de partidos
        return redirect('/partidos')->with('success', 'El partido se ha agregado correctamente.');
    } else {
        // El partido no se puede ingresar porque no es de la semana actual
        // Redirigir al usuario al formulario de ingreso de partidos con un mensaje de error
        return redirect('/partidos.create')->with('error', 'Solo se pueden agregar partidos de la semana actual.');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $partidos = Partido::find($id);

        return view('partidos.show', compact('partidos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partidos = Partido::find($id);

        return view('partidos.edit', compact('partidos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Partido $partidos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partido $partidos)
    {
        //request()->validate(Partido::$rules);

        $partidos->update($request->all());
        //$partidos->save();

        return redirect()->route('partidos.index')
            ->with('success', 'Partido updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $partidos = Partido::find($id)->delete();

        return redirect()->route('partidos.index')
            ->with('success', 'Partido deleted successfully');
    }
}

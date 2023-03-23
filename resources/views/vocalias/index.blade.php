@extends('layouts.app')

@section('template_title')
    Vocalias
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Vocalias') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('vocaliases.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Fecha Partido</th>
										<th>Nombre Equipo Local</th>
										<th>Nombre Equipo Visitante</th>
										<th>Nombre Jugador Local</th>
										<th>Nombre Jugador Visitante</th>
										<th>Nombre Torneo</th>
										<th>Nombre Presidente</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vocaliases as $vocalias)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $vocalias->fecha_partido }}</td>
											<td>{{ $vocalias->nombre_equipo_local }}</td>
											<td>{{ $vocalias->nombre_equipo_visitante }}</td>
											<td>{{ $vocalias->nombre_jugador_local }}</td>
											<td>{{ $vocalias->nombre_jugador_visitante }}</td>
											<td>{{ $vocalias->nombre_torneo }}</td>
											<td>{{ $vocalias->nombre_presidente }}</td>

                                            <td>
                                                <form action="{{ route('vocaliases.destroy',$vocalias->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('vocaliases.show',$vocalias->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('vocaliases.edit',$vocalias->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $vocaliases->links() !!}
            </div>
        </div>
    </div>
@endsection

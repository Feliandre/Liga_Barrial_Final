@extends('layouts.app')

@section('template_title')
    Partido
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Partido') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('partidos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Torneo Id</th>
										<th>Goles Local</th>
										<th>Goles Visitante</th>
										<th>Equipo Local Id</th>
										<th>Equipo Visitante Id</th>
										<th>Fecha</th>
										<th>Hora</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($partidos as $partido)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $partido->torneo_id }}</td>
											<td>{{ $partido->goles_local }}</td>
											<td>{{ $partido->goles_visitante }}</td>
											<td>{{ $partido->equipo_local_id }}</td>
											<td>{{ $partido->equipo_visitante_id }}</td>
											<td>{{ $partido->fecha }}</td>
											<td>{{ $partido->hora }}</td>

                                            <td>
                                                <form action="{{ route('partidos.destroy',$partido->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('partidos.show',$partido->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('partidos.edit',$partido->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $partidos->links() !!}
            </div>
        </div>
    </div>
@endsection

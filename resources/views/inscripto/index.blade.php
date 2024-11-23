@extends('layouts.app')

@section('template_title')
    Inscriptos
@endsection

@section('content')
    <div class="container-flumatriculasocio">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span matriculasocio="card_title">
                                {{ __('Inscriptos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('inscriptos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Matriculasocio</th>
									<th >Numero</th>
									<th >Matricula</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($inscriptos as $inscripto)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $inscripto->matriculasocio }}</td>
										<td >{{ $inscripto->numero }}</td>
										<td >{{ $inscripto->matricula }}</td>

                                            <td>
                                                <form action="{{ route('inscriptos.destroy', $inscripto->matriculasocio) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('inscriptos.show', $inscripto->matriculasocio) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('inscriptos.edit', $inscripto->matriculasocio) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $inscriptos->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('template_title')
    {{ $socio->name ?? __('Show') . " " . __('Socio') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Socio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('socios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Matricula:</strong>
                                    {{ $socio->matricula }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $socio->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Domicilio:</strong>
                                    {{ $socio->domicilio }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

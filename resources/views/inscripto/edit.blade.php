@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Inscripto
@endsection

@section('content')
    <section class="content container-flumatriculasocio">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Inscripto</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('inscriptos.update', $inscripto->matriculasocio) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('inscripto.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

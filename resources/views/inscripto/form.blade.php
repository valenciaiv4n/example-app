<div class="row padding-1 p-1">
    <div class="col-md-12">
        <div class="form-group mb-2 mb20">
            <label for="matriculasocio" class="form-label">{{ __('Matriculasocio') }}</label>
            
            <select  name="matriculasocio" class="form-select @error('matriculasocio') is-invalid @enderror" id="matriculasocio" placeholder="Matriculasocio">
                @foreach ($socios as $key => $val)
                    <option {{ old('matricula', $inscripto?->matriculasocio ) == $val->matricula ? "selected" : "" }} value="{{ $val->matricula }}">{{ $val->nombre }}</option>
                @endforeach
            </select>
            {!! $errors->first('matriculasocio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="numero" class="form-label">{{ __('Numero') }}</label>
            <input type="text" name="numero" class="form-control @error('numero') is-invalid @enderror" value="{{ old('numero', $inscripto?->numero) }}" id="numero" placeholder="Numero">
            {!! $errors->first('numero', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="matricula" class="form-label">{{ __('Matricula') }}</label>
            <input type="text" name="matricula" class="form-control @error('matricula') is-invalid @enderror" value="{{ old('matricula', $inscripto?->matricula) }}" id="matricula" placeholder="Matricula">
            {!! $errors->first('matricula', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
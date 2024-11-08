<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="numero" class="form-label">{{ __('Numero') }}</label>
            <input type="text" name="numero" class="form-control @error('numero') is-invalid @enderror" value="{{ old('numero', $curso?->numero) }}" id="numero" placeholder="Numero">
            {!! $errors->first('numero', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="deporte" class="form-label">{{ __('Deporte') }}</label>
            <input type="text" name="deporte" class="form-control @error('deporte') is-invalid @enderror" value="{{ old('deporte', $curso?->deporte) }}" id="deporte" placeholder="Deporte">
            {!! $errors->first('deporte', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="dia" class="form-label">{{ __('Dia') }}</label>
            <input type="text" name="dia" class="form-control @error('dia') is-invalid @enderror" value="{{ old('dia', $curso?->dia) }}" id="dia" placeholder="Dia">
            {!! $errors->first('dia', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="matriculaprofesor" class="form-label">{{ __('Matriculaprofesor') }}</label>
            <input type="text" name="matriculaprofesor" class="form-control @error('matriculaprofesor') is-invalid @enderror" value="{{ old('matriculaprofesor', $curso?->matriculaprofesor) }}" id="matriculaprofesor" placeholder="Matriculaprofesor">
            {!! $errors->first('matriculaprofesor', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
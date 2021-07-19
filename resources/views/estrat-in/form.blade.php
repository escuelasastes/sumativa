<div class="box box-info padding-1">
    <div class="form-row">
        
        <div class="form-group col-md-6">
            {{ Form::label('Estrategia(s) de Instrucción:') }}
            {{ Form::text('estrategia', $estratIn->estrategia, ['class' => 'form-control' . ($errors->has('Estrategia(s) de Instrucción') ? ' is-invalid' : ''), 'placeholder' => 'Estrategia']) }}
            {!! $errors->first('estrategia', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
<div class="box box-info padding-1">
    <div class="form-row">
        
        <div class="form-group col-md-2">
            {{ Form::label('Número de proyecto:') }}
            {{ Form::text('noPr', $planpro->noPr, ['class' => 'form-control' . ($errors->has('noPr') ? ' is-invalid' : ''), 'placeholder' => 'Número de proyecto']) }}
            {!! $errors->first('noPr', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-4">
            {{ Form::label('Competencia(s):') }}
            {{ Form::text('competencia', $planpro->competencia, ['class' => 'form-control' . ($errors->has('competencia') ? ' is-invalid' : ''), 'placeholder' => 'Competencia']) }}
            {!! $errors->first('competencia', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-4">
            {{ Form::label('Ponderacion:') }}
            {{ Form::text('ponderacion', $planpro->ponderacion, ['class' => 'form-control' . ($errors->has('ponderacion') ? ' is-invalid' : ''), 'placeholder' => 'Ponderacion']) }}
            {!! $errors->first('ponderacion', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt30">
        <center><button type="submit" class="btn btn-social btn-fill btn-facebook">Submit</button></center>
    </div>
</div>
<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('noPr') }}
            {{ Form::text('noPr', $planpro->noPr, ['class' => 'form-control' . ($errors->has('noPr') ? ' is-invalid' : ''), 'placeholder' => 'Nopr']) }}
            {!! $errors->first('noPr', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('competencia') }}
            {{ Form::text('competencia', $planpro->competencia, ['class' => 'form-control' . ($errors->has('competencia') ? ' is-invalid' : ''), 'placeholder' => 'Competencia']) }}
            {!! $errors->first('competencia', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ponderacion') }}
            {{ Form::text('ponderacion', $planpro->ponderacion, ['class' => 'form-control' . ($errors->has('ponderacion') ? ' is-invalid' : ''), 'placeholder' => 'Ponderacion']) }}
            {!! $errors->first('ponderacion', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
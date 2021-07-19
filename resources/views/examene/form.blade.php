<div class="box box-info padding-1">
    <div class="form-row">
        
        <div class="form-group col-md-4">
            {{ Form::label('Evaluación') }}
            {{ Form::date('evaluacion', $examene->evaluacion, ['class' => 'form-control' . ($errors->has('evaluacion') ? ' is-invalid' : ''), 'placeholder' => 'Evaluacion']) }}
            {!! $errors->first('evaluacion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-4">
            {{ Form::label('Revisión de la evaluación') }}
            {{ Form::date('reveval', $examene->reveval, ['class' => 'form-control' . ($errors->has('reveval') ? ' is-invalid' : ''), 'placeholder' => 'Revisión de la evaluación']) }}
            {!! $errors->first('reveval', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-4">
            {{ Form::label('Entrega Servicios Escolares') }}
            {{ Form::date('entrSE', $examene->entrSE, ['class' => 'form-control' . ($errors->has('entrSE') ? ' is-invalid' : ''), 'placeholder' => 'Entrega Servicios Escolares']) }}
            {!! $errors->first('entrSE', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <center><button type="submit" class="btn btn-social btn-fill btn-facebook">Submit</button></center>
    </div>
</div>
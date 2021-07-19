<div class="box box-info padding-1">
    <div class="form-row">
        
        <div class="form-group col-md-4">
            {{ Form::label('Ejes:') }}
            {{ Form::text('ejes', $siseval->ejes, ['class' => 'form-control' . ($errors->has('ejes') ? ' is-invalid' : ''), 'placeholder' => 'Ejes']) }}
            {!! $errors->first('ejes', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-4">
            {{ Form::label('Competencia:') }}
            {{ Form::text('competencias', $siseval->competencias, ['class' => 'form-control' . ($errors->has('competencias') ? ' is-invalid' : ''), 'placeholder' => 'Competencia']) }}
            {!! $errors->first('competencias', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-4">
            {{ Form::label('Factores y/o Criterios de Evaluación:') }}
            {{ Form::text('criterios', $siseval->criterios, ['class' => 'form-control' . ($errors->has('criterios') ? ' is-invalid' : ''), 'placeholder' => 'Factores y/o Criterios de evaluación']) }}
            {!! $errors->first('criterios', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-4">
            {{ Form::label('Ponderación:') }}
            {{ Form::text('ponderaciones', $siseval->ponderaciones, ['class' => 'form-control' . ($errors->has('ponderaciones') ? ' is-invalid' : ''), 'placeholder' => 'Ponderación']) }}
            {!! $errors->first('ponderaciones', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-4">
            {{ Form::label('Total:') }}
            {{ Form::text('total', $siseval->total, ['class' => 'form-control' . ($errors->has('total') ? ' is-invalid' : ''), 'placeholder' => 'Total']) }}
            {!! $errors->first('total', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <center><button type="submit" class="btn btn-social btn-fill btn-facebook">Submit</button></center>
    </div>
</div>
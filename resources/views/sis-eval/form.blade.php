<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('ejes') }}
            {{ Form::text('ejes', $sisEval->ejes, ['class' => 'form-control' . ($errors->has('ejes') ? ' is-invalid' : ''), 'placeholder' => 'Ejes']) }}
            {!! $errors->first('ejes', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('competencias') }}
            {{ Form::text('competencias', $sisEval->competencias, ['class' => 'form-control' . ($errors->has('competencias') ? ' is-invalid' : ''), 'placeholder' => 'Competencias']) }}
            {!! $errors->first('competencias', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('criterios') }}
            {{ Form::text('criterios', $sisEval->criterios, ['class' => 'form-control' . ($errors->has('criterios') ? ' is-invalid' : ''), 'placeholder' => 'Criterios']) }}
            {!! $errors->first('criterios', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ponderaciones') }}
            {{ Form::text('ponderaciones', $sisEval->ponderaciones, ['class' => 'form-control' . ($errors->has('ponderaciones') ? ' is-invalid' : ''), 'placeholder' => 'Ponderaciones']) }}
            {!! $errors->first('ponderaciones', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total') }}
            {{ Form::text('total', $sisEval->total, ['class' => 'form-control' . ($errors->has('total') ? ' is-invalid' : ''), 'placeholder' => 'Total']) }}
            {!! $errors->first('total', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
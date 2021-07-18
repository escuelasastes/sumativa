<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('ejes') }}
            {{ Form::text('ejes', $siseval->ejes, ['class' => 'form-control' . ($errors->has('ejes') ? ' is-invalid' : ''), 'placeholder' => 'Ejes']) }}
            {!! $errors->first('ejes', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('competencias') }}
            {{ Form::text('competencias', $siseval->competencias, ['class' => 'form-control' . ($errors->has('competencias') ? ' is-invalid' : ''), 'placeholder' => 'Competencias']) }}
            {!! $errors->first('competencias', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('criterios') }}
            {{ Form::text('criterios', $siseval->criterios, ['class' => 'form-control' . ($errors->has('criterios') ? ' is-invalid' : ''), 'placeholder' => 'Criterios']) }}
            {!! $errors->first('criterios', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ponderaciones') }}
            {{ Form::text('ponderaciones', $siseval->ponderaciones, ['class' => 'form-control' . ($errors->has('ponderaciones') ? ' is-invalid' : ''), 'placeholder' => 'Ponderaciones']) }}
            {!! $errors->first('ponderaciones', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total') }}
            {{ Form::text('total', $siseval->total, ['class' => 'form-control' . ($errors->has('total') ? ' is-invalid' : ''), 'placeholder' => 'Total']) }}
            {!! $errors->first('total', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
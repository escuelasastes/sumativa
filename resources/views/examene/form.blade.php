<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('evaluacion') }}
            {{ Form::text('evaluacion', $examene->evaluacion, ['class' => 'form-control' . ($errors->has('evaluacion') ? ' is-invalid' : ''), 'placeholder' => 'Evaluacion']) }}
            {!! $errors->first('evaluacion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('reveval') }}
            {{ Form::text('reveval', $examene->reveval, ['class' => 'form-control' . ($errors->has('reveval') ? ' is-invalid' : ''), 'placeholder' => 'Reveval']) }}
            {!! $errors->first('reveval', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('entrSE') }}
            {{ Form::text('entrSE', $examene->entrSE, ['class' => 'form-control' . ($errors->has('entrSE') ? ' is-invalid' : ''), 'placeholder' => 'Entrse']) }}
            {!! $errors->first('entrSE', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
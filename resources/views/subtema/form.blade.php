<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('subtemas') }}
            {{ Form::text('subtemas', $subtema->subtemas, ['class' => 'form-control' . ($errors->has('subtemas') ? ' is-invalid' : ''), 'placeholder' => 'Subtemas']) }}
            {!! $errors->first('subtemas', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
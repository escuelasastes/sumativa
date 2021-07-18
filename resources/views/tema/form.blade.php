<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('temas') }}
            {{ Form::text('temas', $tema->temas, ['class' => 'form-control' . ($errors->has('temas') ? ' is-invalid' : ''), 'placeholder' => 'Temas']) }}
            {!! $errors->first('temas', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
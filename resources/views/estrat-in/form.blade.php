<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('estrategia') }}
            {{ Form::text('estrategia', $estratIn->estrategia, ['class' => 'form-control' . ($errors->has('estrategia') ? ' is-invalid' : ''), 'placeholder' => 'Estrategia']) }}
            {!! $errors->first('estrategia', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
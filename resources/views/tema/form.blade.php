<div class="box box-info padding-1">
    <div class="form-row">
        <div class="form-group col-md-6">
            {{ Form::label('Tema(s):') }}
            {{ Form::text('temas', $tema->temas, ['class' => 'form-control' . ($errors->has('temas') ? ' is-invalid' : ''), 'placeholder' => 'Temas']) }}
            {!! $errors->first('temas', '<div class="invalid-feedback">:message</p>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <center><button type="submit" class="btn btn-social btn-fill btn-behance">Submit</button></center>
    </div>
</div>
<div class="box box-info padding-1">
    <div class="form-row">
        
        <div class="form-group col-md-6">
            {{ Form::label('Actividad:') }}
            {{ Form::text('actividad', $actividade->actividad, ['class' => 'form-control' . ($errors->has('Actividad') ? ' is-invalid' : ''), 'placeholder' => 'Actividad']) }}
            {!! $errors->first('actividad', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <center><button type="submit" class="btn btn-social btn-fill btn-linkedin">Submit</button></center>
    </div>
</div>
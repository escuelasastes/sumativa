<div class="box box-info padding-1">
    <div class="form-row">
        
        <div class="form-group col-md-6">
            {{ Form::label('Subtema(s):') }}
            {{ Form::text('subtemas', $subtema->subtemas, ['class' => 'form-control' . ($errors->has('Subtema(s)') ? ' is-invalid' : ''), 'placeholder' => 'Subtemas']) }}
            {!! $errors->first('subtemas', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <center><button type="submit" class="btn btn-social btn-fill btn-linkedin">Submit</button></center>
    </div>
</div>
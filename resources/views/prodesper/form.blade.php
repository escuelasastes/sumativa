<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('prodEsp') }}
            {{ Form::text('prodEsp', $prodesper->prodEsp, ['class' => 'form-control' . ($errors->has('prodEsp') ? ' is-invalid' : ''), 'placeholder' => 'Prodesp']) }}
            {!! $errors->first('prodEsp', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
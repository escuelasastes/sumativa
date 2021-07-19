<div class="box box-info padding-1">
    <div class="form-row">
        <div class="form-group col-md-6">
            {{ Form::label('Producto (s) y/o Aprendizaje(s)Esperado(s)') }}
            {{ Form::text('prodEsp', $prodesper->prodEsp, ['class' => 'form-control' . ($errors->has('prodEsp') ? ' is-invalid' : ''), 'placeholder' => 'Producto (s) y/o Aprendizaje(s)Esperado(s):']) }}
            {!! $errors->first('prodEsp', '<div class="invalid-feedback">:message</p>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <center><button type="submit" class="btn btn-social btn-fill btn-facebook">Submit</button></center>
    </div>
</div>
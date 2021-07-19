<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $materia->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('competenciaA') }}
            {{ Form::text('competenciaA', $materia->competenciaA, ['class' => 'form-control' . ($errors->has('competenciaA') ? ' is-invalid' : ''), 'placeholder' => 'Competenciaa']) }}
            {!! $errors->first('competenciaA', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fuentes') }}
            {{ Form::text('fuentes', $materia->fuentes, ['class' => 'form-control' . ($errors->has('fuentes') ? ' is-invalid' : ''), 'placeholder' => 'Fuentes']) }}
            {!! $errors->first('fuentes', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('unidades_id') }}
            <select name="unidades_id" id="unidades_id" class="form-control">
            <option>Selecciona</option>
             @foreach ($unidades as $unidade)
             <option value="{{$unidade['id']}}">{{$unidade['nomunidad']}}</option> 
            @endforeach
            </select>
            {!! $errors->first('unidades_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sisevals_id') }}
            <select name="sisevals_id" id="sisevals_id" class="form-control">
            <option>Selecciona</option> 
             @foreach ($sisevals as $siseval)
             <option value="{{$siseval['id']}}">{{$siseval['criterios']}}</option> 
            @endforeach
            </select>
            {!! $errors->first('sisevals_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-social btn-fill btn-behance">Submit</button>
    </div>
</div>
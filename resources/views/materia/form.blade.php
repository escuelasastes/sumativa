<div class="box box-info padding-1">
    <div class="form-row">
        
        <div class="form-group col-md-2">
            {{ Form::label('Asignatura:') }}
            {{ Form::text('nombre', $materia->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Asignatura']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-4">
            {{ Form::label('Competencia Específica de la Asignatura:') }}
            {{ Form::text('competenciaA', $materia->competenciaA, ['class' => 'form-control' . ($errors->has('competenciaA') ? ' is-invalid' : ''), 'placeholder' => 'Competencia Específica de la Asignatura']) }}
            {!! $errors->first('competenciaA', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-3">
            {{ Form::label('Fuentes de Información:') }}
            {{ Form::text('fuentes', $materia->fuentes, ['class' => 'form-control' . ($errors->has('fuentes') ? ' is-invalid' : ''), 'placeholder' => 'Fuentes']) }}
            {!! $errors->first('fuentes', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-4">
            {{ Form::label('Unidad:') }}
            <select name="unidades" id="unidades" class="form-control">
            <option>Selecciona</option>
             @foreach ($unidades as $unidade)
             <option value="{{$unidade->id}}">{{$unidade->nomunidad}}</option> 
            @endforeach
            </select>
            {!! $errors->first('nomunidad', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-4">
            {{ Form::label('Sistema de Evaluación:') }}
            <select name="criterios" id="criterios" class="form-control">
            <option>Selecciona</option> 
             @foreach ($sisevals as $siseval)
             <option value="{{$siseval->id}}">{{$siseval->criterios}}</option> 
            @endforeach
            </select>
            {!! $errors->first('criterios', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <center><button type="submit" class="btn btn-social btn-fill btn-behance">Submit</button></center>
    </div>
</div>
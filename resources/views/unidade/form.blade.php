<div class="box box-info padding-1">
    <div class="form-row">
        
        <div class="form-group col-md-3">
            {{ Form::label('Unidad:') }}
            {{ Form::text('numUnidad', $unidade->numUnidad, ['class' => 'form-control' . ($errors->has('numUnidad') ? ' is-invalid' : ''), 'placeholder' => 'Unidad:']) }}
            {!! $errors->first('numUnidad', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-3">
            {{ Form::label('Competencia Específica del Tema:') }}
            {{ Form::text('competEspTema', $unidade->competEspTema, ['class' => 'form-control' . ($errors->has('competEspTema') ? ' is-invalid' : ''), 'placeholder' => 'Competencia Específica del Tema']) }}
            {!! $errors->first('competEspTema', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-3">
            {{ Form::label('Tema:') }}
            {{ Form::text('nomunidad', $unidade->nomunidad, ['class' => 'form-control' . ($errors->has('nomunidad') ? ' is-invalid' : ''), 'placeholder' => 'Tema']) }}
            {!! $errors->first('nomunidad', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-3">
            {{ Form::label('Temas y/o Practica:') }}
            <select name="temas_id" id="temas_id" class="form-control">
             @foreach ($temas as $tema)
             <option value="{{$tema['id']}}">{{$tema['temas']}}</option> 
            @endforeach
            </select>
            {!! $errors->first('temas_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-3">
            {{ Form::label('Subtema y/o práctica:') }}
            <select name="subtemas_id" id="subtemas_id" class="form-control">
             @foreach ($subtemas as $subtema)
             <option value="{{$subtema['id']}}">{{$subtema['subtemas']}}</option> 
            @endforeach
            </select>
            {!! $errors->first('subtemas_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-3">
            {{ Form::label('Estrategia(s) de Instrucción:') }}
            <select name="estrat_ins_id" id="estrat_ins_id" class="form-control">
             @foreach ($estrat_ins as $estrat_in)
             <option value="{{$estrat_in['id']}}">{{$estrat_in['estrategia']}}</option> 
            @endforeach
            </select>
            {!! $errors->first('estrat_ins_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-3">
            {{ Form::label('Producto (s) y/o Aprendizaje(s)Esperado(s):') }}
            <select name="prodespers_id" id="prodespers_id" class="form-control">
             @foreach ($prodespers as $prodesper)
             <option value="{{$prodesper['id']}}">{{$prodesper['prodEsp']}}</option> 
            @endforeach
            </select>
            {!! $errors->first('prodespers_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-3">
            {{ Form::label('sistema de evaluacion:') }}
            <select name="sisevals_id" id="sisevals_id" class="form-control">
             @foreach ($sisevals as $siseval)
             <option value="{{$siseval['id']}}">{{$siseval['criterios']}}</option> 
            @endforeach
            </select>
            {!! $errors->first('sisevals_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-3">
            {{ Form::label('Examenes:') }}
            <select name="examenes_id" id="examenes_id" class="form-control">
             @foreach ($examenes as $examene)
             <option value="{{$examene['id']}}">{{$examene['evaluacion']}}</option> 
            @endforeach
            </select>
            {!! $errors->first('examenes_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-3">
            {{ Form::label('Plan de proyectos:') }}
            <select name="planpros_id" id="planpros_id" class="form-control">
             @foreach ($planpros as $planpro)
             <option value="{{$planpro['id']}}">{{$planpro['competencia']}}</option> 
            @endforeach
            </select>
            {!! $errors->first('planpros_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <center><button type="submit" class="btn btn-social btn-fill btn-linkedin">Submit</button></center>
    </div>
</div>
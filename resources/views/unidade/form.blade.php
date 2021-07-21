<div class="box box-info padding-1">
    <div class="form-row">
        
        <div class="form-group col-md-3">
            <strong>Unidad:</strong>
            {{ Form::text('numUnidad', $unidade->numUnidad, ['class' => 'form-control' . ($errors->has('numUnidad') ? ' is-invalid' : ''), 'placeholder' => 'Unidad:']) }}
            {!! $errors->first('numUnidad', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-3">
            <strong>Tema:</strong>
            {{ Form::text('nomunidad', $unidade->nomunidad, ['class' => 'form-control' . ($errors->has('nomunidad') ? ' is-invalid' : ''), 'placeholder' => 'Tema']) }}
            {!! $errors->first('nomunidad', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-4">
            <strong>Competencia Específica del Tema:</strong>
            {{ Form::text('competEspTema', $unidade->competEspTema, ['class' => 'form-control' . ($errors->has('competEspTema') ? ' is-invalid' : ''), 'placeholder' => 'Competencia Específica del Tema']) }}
            {!! $errors->first('competEspTema', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-4">
            <strong>Temas y/o Practica:</strong>
            <select name="temas" id="temas" class="form-control">
            <option>Selecciona</option>
             @foreach ($temas as $tema)
             <option value="{{$tema->id}}">{{$tema->temas}}</option> 
            @endforeach
            </select>
            {!! $errors->first('temas', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-4">
            <strong>Subtema y/o práctica:</strong>
            <select name="subtemas" id="subtemas" class="form-control">
            <option>Selecciona</option>
             @foreach ($subtemas as $subtema)
             <option value="{{$subtema->id}}">{{$subtema['subtemas']}}</option> 
            @endforeach
            </select>
            {!! $errors->first('subtemas', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-4">
            {{ Form::label('Estrategia(s) de Instrucción:') }}
            <select name="estrategia" id="estrategia" class="form-control">
            <option>Selecciona</option>
             @foreach ($estrat_ins as $estrat_in)
             <option value="{{$estrat_in->id}}">{{$estrat_in['estrategia']}}</option> 
            @endforeach
            </select>
            {!! $errors->first('estrategia', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-4">
            <strong>Producto (s) y/o Aprendizaje(s)Esperado(s):</strong>
                <select name="prodEsp" id="prodEsp" class="form-control">
                    <option>Selecciona</option>
                    @foreach ($prodespers as $prodesper)
                        <option value="{{$prodesper->id}}">{{$prodesper->prodEsp}}</option> 
                    @endforeach
                </select>
                {!! $errors->first('prodEsp', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-4">
            <strong>Sistema de evaluacion:</strong>
            <select name="criterios" id="criterios" class="form-control">
            <option>Selecciona</option>
             @foreach ($sisevals as $siseval)
             <option value="{{$siseval->id}}">{{$siseval->criterios}}</option> 
            @endforeach
            </select>
            {!! $errors->first('criterios', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-4">
            <strong>Examenes:</strong>
                <select name="evaluacion" id="evaluacion" class="form-control">
                    <option>Selecciona</option>
                    @foreach ($examenes as $examene)
                        <option value="{{$examene->id}}">{{$examene->evaluacion}}</option> 
                    @endforeach
                </select>
                {!! $errors->first('evaluacion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group col-md-4">
            <strong>Plan de proyectos:</strong>
            <select name="competencia" id="competencia" class="form-control">
            <option>Selecciona</option>
             @foreach ($planpros as $planpro)
             <option value="{{$planpro->id}}">{{$planpro->competencia}}</option> 
            @endforeach
            </select>
            {!! $errors->first('competencia', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <center><button type="submit" class="btn btn-social btn-fill btn-linkedin">Submit</button></center>
    </div>
</div>
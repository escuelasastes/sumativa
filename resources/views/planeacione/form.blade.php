<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('materias') }}
            <select name="materias_id" id="materias_id" class="form-control">
                @foreach ($materias as $materia)
                    <option value="{{$materia['id']}}">{{$materia['nombre']}}</option> 
                @endforeach
                <span class="bs-caret"><span class="caret"></span></span>
            </select>
            {!! $errors->first('materias_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-social btn-fill btn-behance">Submit</button>
    </div>
</div>
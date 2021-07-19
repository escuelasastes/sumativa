<div class="box box-info padding-1">
    <div class="form-row">
        <div class="form-group col-md-6">
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
        <center><button type="submit" class="btn btn-social btn-fill btn-linkedin">Submit</button></center>
    </div>
</div>
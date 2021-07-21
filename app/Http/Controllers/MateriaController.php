<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use App\Models\Unidade;
use App\Models\SisEval;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

/**
 * Class MateriaController
 * @package App\Http\Controllers
 */
class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materias =DB::select('SELECT materias.id,nombre,competenciaA,fuentes,numUnidad,nomunidad,competEspTema,ejes,competencias,criterios,ponderaciones,total FROM materias,unidades,sisevals WHERE unidades.id=materias.unidades_id AND sisevals.id=unidades.sisevals_id; ');
        return view('materia.index', compact('materias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materia = new Materia();
        $unidades =  Unidade::all();
        $sisevals =  SisEval::all();
        return view('materia.create', ['materia'=>$materia,'unidades'=>$unidades,'sisevals'=>$sisevals]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Materia $materia)
    {
        $campos =[
            'nombre' => 'required',
            'competenciaA' => 'required',
            'fuentes' => 'required',
            'unidades' => 'required',
            'criterios' => 'required',
        ];

        $Mensaje = ['required' => ':campo requerido'];

        $this->validate($request, $campos, $Mensaje);

        $materia->nombre=$request->input('nombre');
        $materia->competenciaA=$request->input('competenciaA');
        $materia->fuentes=$request->input('fuentes');
        $materia->unidades_id=$request->input('unidades');
        $materia->sisevals_id=$request->input('criterios');
        $materia->save();

        return redirect()->route('materias.index')
            ->with('success', 'Materia created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $materia = Materia::find($id);
        $materias =DB::select('SELECT materias.id,nombre,competenciaA,fuentes,numUnidad,nomunidad,competEspTema,ejes,competencias,criterios,ponderaciones,total FROM materias,unidades,sisevals WHERE unidades.id=materias.unidades_id AND sisevals.id=unidades.sisevals_id; ');

        return view('materia.show', compact('materia','materias'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $materia = Materia::where('id',$id)->first();
        $unidades =  Unidade::all();
        $sisevals =  SisEval::all();
        return view('materia.edit', ['materia'=>$materia,'unidades'=>$unidades,'sisevals'=>$sisevals]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Materia $materia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materia $materia)
    {
        $campos =[
            'nombre' => 'required',
            'competenciaA' => 'required',
            'fuentes' => 'required',
            'unidades' => 'required',
            'criterios' => 'required',
        ];

        $Mensaje = ['required' => ':campo requerido'];

        $this->validate($request, $campos, $Mensaje);

        $materia->nombre=$request->input('nombre');
        $materia->competenciaA=$request->input('competenciaA');
        $materia->fuentes=$request->input('fuentes');
        $materia->unidades_id=$request->input('unidades');
        $materia->sisevals_id=$request->input('criterios');
        $materia->update();

        return redirect()->route('materias.index')
            ->with('success', 'Materia updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $materia = Materia::find($id)->delete();

        return redirect()->route('materias.index')
            ->with('success', 'Materia deleted successfully');
    }
}

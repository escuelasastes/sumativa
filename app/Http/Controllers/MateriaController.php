<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use App\Models\Unidade;
use App\Models\SisEval;
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
        $materias =Materia::select('SELECT nombre,competenciaA,fuentes,numUnidad,nomUnidad,competEspTema,ejes,competencias,criterios,ponderaciones,total FROM materias,unidades,sisevals WHERE unidades.id=materias.unidades_id AND sisevals.id=unidades.sisevals_id;')
        ->paginate(5);

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
        return view('materia.create', compact('materia','unidades','sisevals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Materia::$rules);

        $materia = Materia::create($request->all());

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

        return view('materia.show', compact('materia','unidades'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $materia = Materia::find($id);

        return view('materia.edit', compact('materia'));
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
        request()->validate(Materia::$rules);

        $materia->update($request->all());

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

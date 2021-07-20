<?php

namespace App\Http\Controllers;

use App\Models\Unidade;
use App\Models\Tema;
use App\Models\Subtema;
use App\Models\EstratIn;
use App\Models\Prodesper;
use App\Models\SisEval;
use App\Models\Examene;
use App\Models\Planpro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class UnidadeController
 * @package App\Http\Controllers
 */
class UnidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unidades=DB::select("SELECT unidades.id,numUnidad,nomunidad,competEspTema,temas,subtemas,estrategia,prodEsp,ejes,competencias,criterios,ponderaciones,total,DATE_FORMAT(evaluacion,'%d/%m/%Y') as evaluacion,DATE_FORMAT(reveval,'%d/%m/%Y') as reveval,DATE_FORMAT(entrSE,'%d/%m/%Y') as entrSE,noPr,competencia,ponderacion FROM unidades,temas,subtemas,estrat_ins,prodespers,sisevals,examenes,planpros WHERE temas.id=unidades.temas_id AND subtemas.id=unidades.subtemas_id AND estrat_ins.id=unidades.estrat_ins_id AND prodespers.id=unidades.prodespers_id AND sisevals.id=unidades.sisevals_id AND examenes.id=unidades.examenes_id AND planpros.id=unidades.planpros_id;");

        return view('unidade.index', compact('unidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unidade = new Unidade();
        $temas =  Tema::all();
        $subtemas =  Subtema::all();
        $estrat_ins =  EstratIn::all();
        $prodespers =  Prodesper::all();
        $sisevals =  SisEval::all();
        $examenes =  Examene::select("examenes.id","examenes.evaluacion","examenes.reveval","entrSE")
        ->selectRaw("DATE_FORMAT(evaluacion,'%d/%m/%Y') as evaluacion")
        ->selectRaw("DATE_FORMAT(reveval,'%d/%m/%Y') as reveval")
        ->selectRaw("DATE_FORMAT(entrSE,'%d/%m/%Y') as entrSE")->get();
        $planpros =  Planpro::all();
        return view('unidade.create', compact('unidade','temas','subtemas','estrat_ins','prodespers','sisevals','examenes','planpros'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Unidade::$rules);

        $unidade = Unidade::create($request->all());

        return redirect()->route('unidades.index')
            ->with('success', 'Unidade created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $unidade = Unidade::find($id);
        $Temas = DB::select("SELECT unidades.id,numUnidad,nomunidad,competEspTema,temas,subtemas,estrategia,prodEsp,ejes,competencias,criterios,ponderaciones,total,DATE_FORMAT(evaluacion,'%d/%m/%Y') as evaluacion,DATE_FORMAT(reveval,'%d/%m/%Y') as reveval,DATE_FORMAT(entrSE,'%d/%m/%Y') as entrSE,noPr,competencia,ponderacion FROM unidades,temas,subtemas,estrat_ins,prodespers,sisevals,examenes,planpros WHERE temas.id=unidades.temas_id AND subtemas.id=unidades.subtemas_id AND estrat_ins.id=unidades.estrat_ins_id AND prodespers.id=unidades.prodespers_id AND sisevals.id=unidades.sisevals_id AND examenes.id=unidades.examenes_id AND planpros.id=unidades.planpros_id;");

        return view('unidade.show', compact('unidade','Temas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $unidade = Unidade::findorFail($id);
        $temas =  Tema::all();
        $subtemas =  Subtema::all();
        $estrat_ins =  EstratIn::all();
        $prodespers =  Prodesper::all();
        $sisevals =  SisEval::all();
        $examenes =  Examene::select("examenes.id","examenes.evaluacion","examenes.reveval","entrSE")
        ->selectRaw("DATE_FORMAT(evaluacion,'%d/%m/%Y') as evaluacion")
        ->selectRaw("DATE_FORMAT(reveval,'%d/%m/%Y') as reveval")
        ->selectRaw("DATE_FORMAT(entrSE,'%d/%m/%Y') as entrSE")->get();
        $planpros =  Planpro::all();
        return view('unidade.edit', compact('unidade','temas','subtemas','estrat_ins','prodespers','sisevals','examenes','planpros'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Unidade $unidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate(Unidade::$rules);

        $unidade = Unidade::where('id',$id)->first();
        $unidade->numUnidad=$request->input('numUnidad');
        $unidade->nomunidad=$request->input('nomunidad');
        $unidade->competEspTema=$request->input('competEspTema');
        $unidade->temas=$request->input('temas');
        $unidade->subtemas=$request->input('subtemas');
        $unidade->estrategia=$request->input('estrategia');
        $unidade->prodEsp=$request->input('prodEsp');
        $unidade->criterios=$request->input('criterios');
        $unidade->evaluacion=$request->input('evaluacion');
        $unidade->competencia=$request->input('competencia');
        $unidade->save();

        return redirect()->route('unidades.index')
            ->with('success', 'Unidade updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $unidade = Unidade::find($id)->delete();

        return redirect()->route('unidades.index')
            ->with('success', 'Unidade deleted successfully');
    }
}

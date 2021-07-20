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
        $unidades = Unidade::paginate();

        return view('unidade.index', compact('unidades'))
            ->with('i', (request()->input('page', 1) - 1) * $unidades->perPage());
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

        return view('unidade.show', compact('unidade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $unidade = Unidade::find($id);

        return view('unidade.edit', compact('unidade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Unidade $unidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unidade $unidade)
    {
        request()->validate(Unidade::$rules);

        $unidade->update($request->all());

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

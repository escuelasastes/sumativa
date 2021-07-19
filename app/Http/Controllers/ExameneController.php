<?php

namespace App\Http\Controllers;

use App\Models\Examene;
use Illuminate\Http\Request;

/**
 * Class ExameneController
 * @package App\Http\Controllers
 */
class ExameneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $examenes = Examene::select("examenes.id","examenes.evaluacion","examenes.reveval","entrSE")
        ->selectRaw("DATE_FORMAT(evaluacion,'%d/%m/%Y') as evaluacion")
        ->selectRaw("DATE_FORMAT(reveval,'%d/%m/%Y') as reveval")
        ->selectRaw("DATE_FORMAT(entrSE,'%d/%m/%Y') as entrSE")
        ->paginate(10);
        return view('examene.index', compact('examenes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $examene = new Examene();
        return view('examene.create', compact('examene'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Examene $examene)
    {
        request()->validate(Examene::$rules);

        $examene->evaluacion=$request->input('evaluacion');
        $examene->reveval=$request->input('reveval');
        $examene->entrSE=$request->input('entrSE');
        $examene->save();

        return redirect()->route('examenes.index')
            ->with('success', 'Examene created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $examene = Examene::findorFail($id);
        $examenes = Examene::select("examenes.id","examenes.evaluacion","examenes.reveval","entrSE")
        ->selectRaw("DATE_FORMAT(evaluacion,'%d/%m/%Y') as evaluacion")
        ->selectRaw("DATE_FORMAT(reveval,'%d/%m/%Y') as reveval")
        ->selectRaw("DATE_FORMAT(entrSE,'%d/%m/%Y') as entrSE")
        ->get();

        return view('examene.show', compact('examene','examenes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $examene = Examene::findorFail($id);

        return view('examene.edit', compact('examene'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Examene $examene
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate(Examene::$rules);

        $examene=Examene::findorFail($id);
        $examene->evaluacion=$request->input('evaluacion');
        $examene->reveval=$request->input('reveval');
        $examene->entrSE=$request->input('entrSE');
        $examene->save();

        return redirect()->route('examenes.index')
            ->with('success', 'Examene updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $examene = Examene::find($id)->delete();

        return redirect()->route('examenes.index')
            ->with('success', 'Examene deleted successfully');
    }
}

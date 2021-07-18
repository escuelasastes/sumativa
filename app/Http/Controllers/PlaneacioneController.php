<?php

namespace App\Http\Controllers;

use App\Models\Planeacione;
use App\Models\Materia;
use Illuminate\Http\Request;

/**
 * Class PlaneacioneController
 * @package App\Http\Controllers
 */
class PlaneacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planeaciones = Planeacione::paginate();

        return view('planeacione.index', compact('planeaciones'))
            ->with('i', (request()->input('page', 1) - 1) * $planeaciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $planeacione = new Planeacione();
        $materias =  Materia::all();
        return view('planeacione.create', compact('planeacione','materias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Planeacione::$rules);

        $planeacione = Planeacione::create($request->all());

        return redirect()->route('planeaciones.index')
            ->with('success', 'Planeacione created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $planeacione = Planeacione::find($id);

        return view('planeacione.show', compact('planeacione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $planeacione = Planeacione::find($id);

        return view('planeacione.edit', compact('planeacione'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Planeacione $planeacione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Planeacione $planeacione)
    {
        request()->validate(Planeacione::$rules);

        $planeacione->update($request->all());

        return redirect()->route('planeaciones.index')
            ->with('success', 'Planeacione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $planeacione = Planeacione::find($id)->delete();

        return redirect()->route('planeaciones.index')
            ->with('success', 'Planeacione deleted successfully');
    }
}

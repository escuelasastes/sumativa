<?php

namespace App\Http\Controllers;

use App\Models\Planpro;
use Illuminate\Http\Request;

/**
 * Class PlanproController
 * @package App\Http\Controllers
 */
class PlanproController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planpros = Planpro::paginate();

        return view('planpro.index', compact('planpros'))
            ->with('i', (request()->input('page', 1) - 1) * $planpros->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $planpro = new Planpro();
        return view('planpro.create', compact('planpro'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Planpro::$rules);

        $planpro = Planpro::create($request->all());

        return redirect()->route('planpros.index')
            ->with('success', 'Planpro created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $planpro = Planpro::find($id);

        return view('planpro.show', compact('planpro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $planpro = Planpro::find($id);

        return view('planpro.edit', compact('planpro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Planpro $planpro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Planpro $planpro)
    {
        request()->validate(Planpro::$rules);

        $planpro->update($request->all());

        return redirect()->route('planpros.index')
            ->with('success', 'Planpro updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $planpro = Planpro::find($id)->delete();

        return redirect()->route('planpros.index')
            ->with('success', 'Planpro deleted successfully');
    }
}

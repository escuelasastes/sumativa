<?php

namespace App\Http\Controllers;

use App\Models\Siseval;
use Illuminate\Http\Request;

/**
 * Class SisevalController
 * @package App\Http\Controllers
 */
class SisevalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sisevals = Siseval::paginate();

        return view('siseval.index', compact('sisevals'))
            ->with('i', (request()->input('page', 1) - 1) * $sisevals->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siseval = new Siseval();
        return view('siseval.create', compact('siseval'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Siseval::$rules);

        $siseval = Siseval::create($request->all());

        return redirect()->route('sisevals.index')
            ->with('success', 'Siseval created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siseval = Siseval::find($id);

        return view('siseval.show', compact('siseval'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siseval = Siseval::find($id);

        return view('siseval.edit', compact('siseval'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Siseval $siseval
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siseval $siseval)
    {
        request()->validate(Siseval::$rules);

        $siseval->update($request->all());

        return redirect()->route('sisevals.index')
            ->with('success', 'Siseval updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $siseval = Siseval::find($id)->delete();

        return redirect()->route('sisevals.index')
            ->with('success', 'Siseval deleted successfully');
    }
}

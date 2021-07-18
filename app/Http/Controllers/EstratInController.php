<?php

namespace App\Http\Controllers;

use App\Models\EstratIn;
use Illuminate\Http\Request;

/**
 * Class EstratInController
 * @package App\Http\Controllers
 */
class EstratInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estratIns = EstratIn::paginate();

        return view('estrat-in.index', compact('estratIns'))
            ->with('i', (request()->input('page', 1) - 1) * $estratIns->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estratIn = new EstratIn();
        return view('estrat-in.create', compact('estratIn'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(EstratIn::$rules);

        $estratIn = EstratIn::create($request->all());

        return redirect()->route('estrat-ins.index')
            ->with('success', 'EstratIn created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estratIn = EstratIn::find($id);

        return view('estrat-in.show', compact('estratIn'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estratIn = EstratIn::find($id);

        return view('estrat-in.edit', compact('estratIn'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  EstratIn $estratIn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EstratIn $estratIn)
    {
        request()->validate(EstratIn::$rules);

        $estratIn->update($request->all());

        return redirect()->route('estrat-ins.index')
            ->with('success', 'EstratIn updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $estratIn = EstratIn::find($id)->delete();

        return redirect()->route('estrat-ins.index')
            ->with('success', 'EstratIn deleted successfully');
    }
}

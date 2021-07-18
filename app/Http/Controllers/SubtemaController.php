<?php

namespace App\Http\Controllers;

use App\Models\Subtema;
use Illuminate\Http\Request;

/**
 * Class SubtemaController
 * @package App\Http\Controllers
 */
class SubtemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subtemas = Subtema::paginate();

        return view('subtema.index', compact('subtemas'))
            ->with('i', (request()->input('page', 1) - 1) * $subtemas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subtema = new Subtema();
        return view('subtema.create', compact('subtema'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Subtema::$rules);

        $subtema = Subtema::create($request->all());

        return redirect()->route('subtemas.index')
            ->with('success', 'Subtema created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subtema = Subtema::find($id);

        return view('subtema.show', compact('subtema'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subtema = Subtema::find($id);

        return view('subtema.edit', compact('subtema'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Subtema $subtema
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subtema $subtema)
    {
        request()->validate(Subtema::$rules);

        $subtema->update($request->all());

        return redirect()->route('subtemas.index')
            ->with('success', 'Subtema updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $subtema = Subtema::find($id)->delete();

        return redirect()->route('subtemas.index')
            ->with('success', 'Subtema deleted successfully');
    }
}

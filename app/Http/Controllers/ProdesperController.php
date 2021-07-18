<?php

namespace App\Http\Controllers;

use App\Models\Prodesper;
use Illuminate\Http\Request;

/**
 * Class ProdesperController
 * @package App\Http\Controllers
 */
class ProdesperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prodespers = Prodesper::paginate();

        return view('prodesper.index', compact('prodespers'))
            ->with('i', (request()->input('page', 1) - 1) * $prodespers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prodesper = new Prodesper();
        return view('prodesper.create', compact('prodesper'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Prodesper::$rules);

        $prodesper = Prodesper::create($request->all());

        return redirect()->route('prodespers.index')
            ->with('success', 'Prodesper created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prodesper = Prodesper::find($id);

        return view('prodesper.show', compact('prodesper'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prodesper = Prodesper::find($id);

        return view('prodesper.edit', compact('prodesper'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Prodesper $prodesper
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prodesper $prodesper)
    {
        request()->validate(Prodesper::$rules);

        $prodesper->update($request->all());

        return redirect()->route('prodespers.index')
            ->with('success', 'Prodesper updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $prodesper = Prodesper::find($id)->delete();

        return redirect()->route('prodespers.index')
            ->with('success', 'Prodesper deleted successfully');
    }
}

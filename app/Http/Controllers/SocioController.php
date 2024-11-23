<?php

namespace App\Http\Controllers;

use App\Models\Socio;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\SocioRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class SocioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $socios = Socio::paginate();

        return view('socio.index', compact('socios'))
            ->with('i', ($request->input('page', 1) - 1) * $socios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $socio = new Socio();

        return view('socio.create', compact('socio'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SocioRequest $request): RedirectResponse
    {
        Socio::create($request->validated());

        return Redirect::route('socios.index')
            ->with('success', 'Socio created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $socio = Socio::find($id);

        return view('socio.show', compact('socio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $socio = Socio::find($id);

        return view('socio.edit', compact('socio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SocioRequest $request, Socio $socio): RedirectResponse
    {
        $socio->update($request->validated());

        return Redirect::route('socios.index')
            ->with('success', 'Socio updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Socio::find($id)->delete();

        return Redirect::route('socios.index')
            ->with('success', 'Socio deleted successfully');
    }
}

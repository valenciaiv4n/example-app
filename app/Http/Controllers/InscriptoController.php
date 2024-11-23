<?php

namespace App\Http\Controllers;

use App\Models\Inscripto;
use App\Models\Socio;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\InscriptoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class InscriptoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $inscriptos = Inscripto::paginate();

        return view('inscripto.index', compact('inscriptos'))
            ->with('i', ($request->input('page', 1) - 1) * $inscriptos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $inscripto = new Inscripto();
        $socios = Socio::all(); //select * from socios;
        return view('inscripto.create', compact('inscripto', 'socios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InscriptoRequest $request): RedirectResponse
    {
        Inscripto::create($request->validated());

        return Redirect::route('inscriptos.index')
            ->with('success', 'Inscripto created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $inscripto = Inscripto::find($id);

        return view('inscripto.show', compact('inscripto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $inscripto = Inscripto::find($id);
        $socios = Socio::all(); //select * from socios;
        return view('inscripto.edit', compact('inscripto','socios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InscriptoRequest $request, Inscripto $inscripto): RedirectResponse
    {
        $inscripto->update($request->validated());

        return Redirect::route('inscriptos.index')
            ->with('success', 'Inscripto updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Inscripto::find($id)->delete();

        return Redirect::route('inscriptos.index')
            ->with('success', 'Inscripto deleted successfully');
    }
}

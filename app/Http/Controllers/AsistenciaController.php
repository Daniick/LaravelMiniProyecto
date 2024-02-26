<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validacion = Validator::make($request->all(), [
            'alumno_id' => 'required|max:10',
            'curso_id' => 'required|max:10',
            'maestro_id' => 'required|max:10',
            'tipo_asistencia_id' => 'required|max:3',
        ]);

        if ($validacion->fails()) {
            return response()->json($validacion->errors(), 400); // Cambié el código de estado a 400 para indicar un error de solicitud incorrecta
        }

        $nuevaAsistencia = Asistencia::create([
            'alumno_id' => $request->alumno_id,
            'curso_id' => $request->curso_id,
            'maestro_id' => $request->maestro_id,
            'tipo_asistencia_id' => $request->tipo_asistencia_id,
            'fecha' => Carbon::now(),
        ]);

        return response()->json($nuevaAsistencia, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Asistencia $asistencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Asistencia $asistencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Asistencia $asistencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Asistencia $asistencia)
    {
        //
    }
}

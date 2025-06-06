<?php

namespace ATS\Http\Controllers\Docente;

use Illuminate\Support\Facades\Auth;
use ATS\Model\{Asignacion,Asignatura,Docente,Grupo};
use Illuminate\Http\Request;
use ATS\Http\Controllers\Controller;
use ATS\Http\Requests\createAsignacionRequest;
use ATS\Http\Requests\UpdateAsignacionRequest;

class AsignacionController extends Controller
{


    public function index()
    {
       $asignaciones = Auth::user()->docente->asignaciones;
       $asignaciones->load(['asignatura','grupo.grado','docente']);
        return view('docente.asignaciones.index',compact('asignaciones'));
    }

    // Additional CRUD actions are not used in docente scope
}

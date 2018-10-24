<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiciosRequest;
use Illuminate\Http\Request;
use App\Servicio;
use App\Asesoria;
use App\List_servicio;
use App\List_asesoria;
use App\User;

class FronAsesorias extends Controller
{
    public function index() {

    $asesorias = Asesoria::orderBy('id', 'DESC')->paginate(5);
        return view('dashboard.frontasesorias.index')
            ->with('asesorias', $asesorias);

    }

    public function create() {

    	return view('dashboard.user.create');

        

    }

     public function createasesoria($id) {

        // dd('hola');
        $asesoria = Asesoria::find($id);
        
        return view('dashboard.asesoria.create')
            ->with('asesoria', $asesoria);
            

    }

    public function store(Request $request) {
        $asesorias = new List_asesoria($request->all());
        $asesorias->user_id = \Auth::user()->id;

        // dd($servicios);
        $asesorias->save();

        // flash('Se ha creado la categoría '. $category->name . ' con exito!')->success();
        return redirect()->route('notificacion_asesoria');
    }

    public function show($id) {

    }

    public function edit($id) {

    }

    public function update(Request $request, $id) {

    }

    public function destroy($id) {

    }
}

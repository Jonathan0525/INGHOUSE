<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;
use App\Asesoria;
use App\List_servicio;
use App\List_asesoria;
use App\User;

class ServiciosFrontController extends Controller
{
    public function index() {

    $servicios = Servicio::orderBy('id', 'DESC')->paginate(5);
        return view('dashboard.frontservicio.index')
            ->with('servicios', $servicios);

    }



 public function createservice($id) {

        // dd('hola');
        $servicio = Servicio::find($id);
        
        return view('dashboard.servicio.create')
            ->with('servicio', $servicio);
            

    }

    
    public function create() {

    	 $servicio = Servicio::find($id);
        
        return view('dashboard.servicio.create')
            ->with('servicio', $servicio);
        

        

    }

    public function store(Request $request) {
        $servicios = new List_servicio($request->all());
        $servicios->user_id = \Auth::user()->id;

        // dd($servicios);
        $servicios->save();

        // flash('Se ha creado la categoría '. $category->name . ' con exito!')->success();
        return redirect()->route('notificacion');
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

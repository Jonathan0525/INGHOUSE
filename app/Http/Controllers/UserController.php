<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;

class UserController extends Controller
{
   	public function index() {

    }

    public function create() {

        dd('hola');
        // $servicios = Servicio::orderBy('id', 'DESC')->paginate(5);
        // return view('dashboard.frontservicio.index')
        //     ->with('servicios', $servicios);
        

    }

    public function list_servicios() {


        $servicios = Servicio::orderBy('id', 'DESC')->paginate(5);
        return view('dashboard.frontservicio.index')
            ->with('servicios', $servicios);
        

    }


    public function createservice($id) {

        // dd('hola');
        $servicio = Servicio::find($id);
        
        return view('dashboard.user.create')
            ->with('servicio', $servicio);
          


        

    }

    public function store(Request $request) {
        $servicio = new Servicio($request->all());
        $servicio->save();

        // flash('Se ha creado la categoría '. $category->name . ' con exito!')->success();
        return redirect()->route('home');
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

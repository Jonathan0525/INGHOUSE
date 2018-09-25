<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiciosRequest;
use Illuminate\Http\Request;
use App\Servicio;
use App\List_servicio;
use App\User;

class UserController extends Controller
{
   	public function index() {

    }

    public function create($id) {

        // dd('hola');
        $servicio = Servicio::find($id);
        
        return view('dashboard.user.create')
            ->with('servicio', $servicio);
        

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
        $servicios = new List_servicio($request->all());
        $servicios->user_id = \Auth::user()->id;

        // dd($servicios);
        $servicios->save();

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

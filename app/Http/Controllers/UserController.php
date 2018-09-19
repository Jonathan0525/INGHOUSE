<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;

class UserController extends Controller
{
   	public function index() {

    }

    public function create() {


        $servicios = Servicio::orderBy('id', 'DESC')->paginate(5);
        return view('dashboard.frontservicio.index')
            ->with('servicios', $servicios);
        

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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;

class AdminUserController extends Controller
{
    public function index() {

    $servicios = Servicio::orderBy('id', 'DESC')->paginate(5);
    return view('dashboard.adminpanel.index')->with('servicios', $servicios);
    
  

    }

    public function create() {

    	return view('dashboard.adminpanel.create');

    }

    public function store(Request $request) {
        $servicio = new Servicio($request->all());
        $servicio->save();

        // flash('Se ha creado la categoría '. $category->name . ' con exito!')->success();
        return redirect()->route('dashboard.adminpanel.index');
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

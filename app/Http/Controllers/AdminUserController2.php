<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asesoria;

class AdminUserController2 extends Controller
{
    public function index() {

    $asesorias = Asesoria::orderBy('id', 'DESC')->paginate(5);
    return view('dashboard.adminpanel2.index')->with('asesorias', $asesorias);
    
  

    }

    public function create() {

    	return view('dashboard.adminpanel2.create');

    }

    public function store(Request $request) {
        $asesoria = new Asesoria($request->all());
        $asesoria->save();

        // flash('Se ha creado la categoría '. $category->name . ' con exito!')->success();
        return redirect()->route('adminpanel2.index');
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

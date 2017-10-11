<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cancha;
use App\Http\Controllers\ReservaController;

class CanchaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $canchas = Cancha::all();
      return view('canchas', array('canchas' => $canchas));
    }

    public function store(Request $request)
    {
        $cancha = new Cancha;
        $cancha->nombre = $request->input('nombre');
        $cancha->tamanio = $request->input('tamano');
        $cancha->precio_dia = $request->input('precio_dia');
        $cancha->precio_noche = $request->input('precio_noche');
        $cancha->latitud = 123;
        $cancha->longitud = 123;
        $cancha->save();

        $resController = new ReservaController();
        $resController->generarReservas($cancha->id, true);

        return view('index');
    }

    public function cargarReservas($canchaId)
    {
      $resController = new ReservaController();
      $resController->generarReservas($canchaId, false);

      return view('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cancha = Cancha::find($id);
        return view('pruebaCancha', array('cancha' => $cancha));
    }

    public function eliminarCancha($id)
    {
      $cancha = Cancha::find($id);

      $resController = new ReservaController();
      $resController->eliminarReservas($id);

      $cancha->delete();

      return view('index');
    }

    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Reserva;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getReservas($tipo)
    {
      $reservas = DB::table('reservas')
                      ->join('canchas', 'cancha_id', '=', 'canchas.id')
                      ->select('reservas.*','canchas.nombre','canchas.precio_dia', 'canchas.precio_noche','canchas.tamanio')
                      ->where('canchas.tamanio', 'cancha_'.$tipo)
                      ->where('reservas.estado','Disponible')
                      ->get();

      return view('reservas', array('reservas' => $reservas));
    }

    public function generarReservas($canchaId, $boolNewCancha)
    {
      if ($boolNewCancha) {
        $fecha = date('Y-m-d');
      }
      else {
        //viene de generar mas reservas, busco la fecha maxima que existe y le sumo un dia
        $fecha = Reserva::where('cancha_id', $canchaId)->first()->max('fecha');
        $fecha = date('Y-m-d', strtotime($fecha.' + 1 days'));
      }

      for ($i=1; $i < 4; $i++) {

        for ($j=8; $j <24 ; $j++) {
          $reserva = new Reserva();
          $reserva->fecha = $fecha;
          $reserva->horario = $j;
          $reserva->estado = "Disponible";
          $reserva->codReserva = mt_rand(1000,9999);
          $reserva->user_id = null;
          $reserva->cancha_id = $canchaId;
          $reserva->save();
        }

        $fecha = date('Y-m-d', strtotime($fecha.' + 1 days'));
      }
    }

    public function eliminarReservas($canchaId)
    {
      $deleted = Reserva::where('cancha_id', $canchaId)->delete();
    }

    public function reservaUsuario($id)
    {
      $reserva = Reserva::find($id);
      $reserva->user_id = \Auth::user()->id;
      $reserva->estado = 'Reservado';
      $reserva->save();
      
      return redirect('/misReservas' . '/' . $reserva->user_id);
    }

    public function getMisReservas($userId)
    {
      $reservas = DB::table('reservas')
                      ->join('canchas', 'cancha_id', '=', 'canchas.id')
                      ->select('reservas.*','canchas.nombre','canchas.precio_dia', 'canchas.precio_noche','canchas.tamanio')
                      ->where('reservas.user_id',$userId)
                      ->orderBy('reservas.fecha','asc',',','reservas.horario','asc')
                      ->get();

      return view('misReservas', array('reservas' => $reservas));
    }

    public function cancelarReserva($id)
    {
      $reserva = Reserva::find($id);
      $reserva->user_id = null;
      $reserva->estado = 'Disponible';
      $reserva->save();

      return view('index');
    }

    public function confirmarReserva(Request $request)
    {
      $codReserva = $request->input('codReserva');

      $reservaS = DB::table('reservas')
                    ->select('reservas.*')
                    ->where('codReserva', $codReserva)
                    ->get();

      $reserva = Reserva::find($reservaS[0]->id);
      if ($reserva !== null) {
        $reserva->estado = 'Seniado';
        $reserva->save();
      }

      return view('index');
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

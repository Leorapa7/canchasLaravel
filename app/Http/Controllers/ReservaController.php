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
                      ->select('reservas.*')
                      ->where('canchas.tamanio', 'cancha_'.$tipo)
                      ->get();
                      
      return view('pruebaCancha', array('reservas' => $reservas));
    }

    public function generarReservas($canchaId)
    {
      $fecha = date('Y-m-d');

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

        $fecha = date('Y-m-d', strtotime($fecha.' + '.$i.' days'));
      }
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

  <link rel="stylesheet" href="{{ asset('css/reservas.css')}}">



  @include('navbar')


  <div class="container">
    <div class="row">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-custom">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="title_day" class="panel-title">
                        <a class="dia_collapsable" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <img src="{{ asset('images/football.png')}}" class ="icons-navbar">
                            Mis Reservas
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse " role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body animated zoomOut">
                        <table class="table table-striped" id="tablaReservas" >
                          <thead>
                            <tr>
                              <th>Cancha</th>
                              <th>Fecha</th>
                              <th>Tamaño</th>
                              <th>Horario</th>
                              <th>Precio</th>
                              <th>Confirmar Reserva</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($reservas as $res)
                            <tr>
                              <td>{{$res->nombre}}</td>
                              <td>{{$res->fecha}}</td>
                              @if ($res->tamanio === 'cancha_5')
                              <td>N° 5</td>
                              @elseif ($res->tamanio === 'cancha_7')
                              <td>N° 7</td>
                              @else
                              <td>N° 9</td>
                              @endif
                              <td>{{$res->horario}}</td>
                              @if ($res->horario < '19')
                              <td>${{$res->precio_dia}}</td>
                              @else
                              <td>${{$res->precio_noche}}</td>
                              @endif
                              <td><form action="/cancelarReserva/{{$res->id}}" method="post">
                                  {{ method_field('PUT') }}
                                  {{ csrf_field() }}
                                  <button>Confirmar</button>
                              </form>
                            </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </div>
  </div>
</div>
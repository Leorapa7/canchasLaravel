  <link rel="stylesheet" href="{{ asset('css/reservas.css')}}">
  <script src="{{ asset('js/reservas.js')}}"></script>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body animated zoomOut">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>Cancha</th>
                              <th>Fecha</th>
                              <th>Tamaño</th>
                              <th>Horario</th>
                              <th>Precio</th>
                              <th>Codigo Reserva</th>
                              <th>Cancelar Reserva</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($reservas as $res)
                            <tr>
                              <td>{{$res->nombre}}</td>
                              <td>{{$res->fecha}}</td>
                              <td>N° 5</td>
                              <td>{{$res->horario}}</td>
                              @if ($res->horario < 19)
                              <td>${{$res->precio_dia}}</td>
                              @else
                              <td>${{$res->precio_noche}}</td>
                              @endif
                              <td>{{$res->codReserva}}</td>
                              <td><form action="/cancelarReserva/{{$res->id}}" method="post">
                                  {{ method_field('PUT') }}
                                  {{ csrf_field() }}
                                  <button>Cancelar</button>
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

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
                            Canchas Registradas
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body animated zoomOut">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>Cancha</th>
                              <th>Ubicacion</th>
                              <th>Tamaño</th>
                              <th>Precio Día</th>
                              <th>Precio Noche</th>
                              <th>Generar Reservas</th>
                              <th>Eliminar</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($canchas as $cancha)
                            <tr>
                              <td>{{$cancha->nombre}}</td>
                              <td>{{$cancha->latitud}} - {{$cancha->longitud}}</td>
                              @if ($cancha->tamanio === 'cancha_5')
                              <td>N° 5</td>
                              @elseif ($cancha->tamanio === 'cancha_7')
                              <td>N° 7</td>
                              @else
                              <td>N° 9</td>
                              @endif
                              <td>${{$cancha->precio_dia}}</td>
                              <td>${{$cancha->precio_noche}}</td>
                              <td><form action="/cargarReservas/{{$cancha->id}}" method="post">
                                {{ method_field('PUT') }}
                                  {{ csrf_field() }}
                                  <button>Generar</button>
                              </form>
                            </td>
                              <td><form action="/eliminarCancha/{{$cancha->id}}" method="post">
                                  {{ method_field('PUT') }}
                                  {{ csrf_field() }}
                                  <button>Eliminar</button>
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

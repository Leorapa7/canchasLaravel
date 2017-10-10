<link rel="stylesheet" href="css/reservas.css">
  <script src="js/reservas.js"></script>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <div class="container">
    <div class="row">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-custom">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="title_day" class="panel-title">
                        <a class="dia_collapsable" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <img src="images/football.png" class ="icons-navbar">
                            Turnos disponibles
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
                              <th>Reserva</th>
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
                              <!--<td><a href="/reserva/{{$res->id}}" class="btn btn-primary btn-sm">Reserva</button></td>-->
                              <td><form action="/reserva/{{$res->id}}" method="post">
                                  {{ method_field('PUT') }}
                                  {{ csrf_field() }}
                                  <button>Reserva</button>
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

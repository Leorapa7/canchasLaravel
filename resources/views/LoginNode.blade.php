@if (Auth::check())
       <script>window.location = "/reservasTriCancha";</script>
@else


@include('navbar')

@if ($errors->has('email'))
    <div class="alert alert-danger alert-dismissable" id="centrado">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>{{ $errors->first('email') }}</strong>
    </div>
@endif

@if ($errors->has('password'))
    <div class="alert alert-danger alert-dismissable" id="centrado">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>{{ $errors->first('password') }}</strong>
    </div>
@endif

@if ($errors->has('name'))
    <div class="alert alert-danger alert-dismissable" id="centrado">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>{{ $errors->first('name') }}</strong>
    </div>
@endif

        <div class="form-style-8">
            <h2>Login</h2>
            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" placeholder="Mail" name="email" value="{{ old('email') }}" required autofocus>
                </div>
                <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" placeholder="Contraseña" name="password" required>
                </div>
                    <button class="login" type="submit" >Login</button>
                </div>
            </form>
         </div>               

        <div class="form-style-8">
            <h2>Registrarse</h2>

            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input id="name" type="text" name="name" placeholder="Nombre" value="{{ old('name') }}" required autofocus>
                </div>
                <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" placeholder="Mail" name="email" value="{{ old('email') }}" required>
                </div>
                <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" placeholder="Contrseña" type="password" class="form-control" name="password" pattern=".{6,20}" required title="La Contraseña debe tener entre 6 y 20 caracteres">
                </div>
                <div>
                    <input type="hidden" type="text" name="type" value="user">
                    <input type="hidden" type="text" name="url-redirect" value="http://localhost:8000/reservasTriCancha?id=22">
                    <input id="password-confirm" placeholder="Confirmar Contraseña" type="password" name="password_confirmation" pattern=".{6,20}" required title="La Contraseña debe tener entre 6 y 20 caracteres">
                </div>
                <div>
                    <button class="enviar" type="submit" >
                        Registrarse
                    </button>
                </div>
            </form>
        </div>

@endif
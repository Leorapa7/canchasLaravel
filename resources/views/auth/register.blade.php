<div id="modalSignup" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="form-style-8">
            <h2>Registrarse</h2>

            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="{{ $errors->has('name') ? ' has-error' : '' }}">

                    <input id="name" type="text" name="name" placeholder="Nombre" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif

                </div>

                <div class="{{ $errors->has('email') ? ' has-error' : '' }}">

                    <input id="email" type="email" placeholder="Mail" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

                </div>

                <div class="{{ $errors->has('password') ? ' has-error' : '' }}">

                    <input id="password" placeholder="Contrseña" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif

                </div>

                <div>
                    <input type="hidden" type="text" name="type" value="user">

                    <input id="password-confirm" placeholder="Confirmar Contraseña" type="password" name="password_confirmation" required>
                </div>

                <div>
                    <button class="enviar" type="submit" >
                        Registrarse
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>

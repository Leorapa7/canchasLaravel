<div id="modalSignup" class="modal fade" role="dialog">
    <div class="modal-dialog">
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

                    <input id="password" placeholder="Contrseña" type="password" class="form-control" name="password" 
                        pattern=".{6,20}" required title="La Contraseña debe tener entre 6 y 20 caracteres">

                </div>

                <div>
                    <input type="hidden" type="text" name="type" value="user">

                    <input id="password-confirm" placeholder="Confirmar Contraseña" type="password" name="password_confirmation" 
                        pattern=".{6,20}" required title="La Contraseña debe tener entre 6 y 20 caracteres">
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

<div id="modalLogin" class="modal fade" role="dialog">
    <div class="modal-dialog">
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

<!--                <div>
                    <a  href="{{ route('password.request') }}">
                        ¿Olvidaste tu Contraseña?
                    </a>
-->
                    <button class="login" type="submit" >
                        Login
                    </button>
                </div>


            </form>

         </div>               
    </div>
</div>

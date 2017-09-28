<div id="modalLogin" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="form-style-8">
                <h2>Iniciar Sesión</h2>



                            <form method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                                         <input id="email" type="email" placeholder="Mail" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif

                                </div>

                                <div class="{{ $errors->has('password') ? ' has-error' : '' }}">

                                        <input id="password" type="password" placeholder="Contraseña" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif

                                </div>


                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                            </label>


 
                                        <button class="enviar" type="submit" >
                                            Login
                                        </button>

                                        <a  href="{{ route('password.request') }}">
                                            Forgot Your Password?
                                        </a>

                            </form>

         </div>               
    </div>
</div>

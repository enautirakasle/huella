
    <form class="form-horizontal" method="POST" action="{{ route('admin.login.submit') }}" novalidate>
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
            <label for="code" class="control-label">Código</label>

            <input id="code" type="code" class="form-control" name="code" value="{{ old('code') }}" required autofocus>

            @if ($errors->has('code'))
                <span class="help-block">
                    <strong>{{ $errors->first('code') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="control-label">Contraseña</label>

            <input id="password" type="password" class="form-control" name="password" required>

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Mantener sesión iniciada
                <small class="form-text text-muted">
                    Marcando la siguiente casilla la sesión será conservada hasta cierres la sesión manualmente
                </small>
            </label>
        </div>

        <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-success">
                    Iniciar Sesión
                </button>
            </div>
        </div>
    </form>

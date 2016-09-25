<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ url('css/me.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
  @section('registro', 'active')
  @include('menu')
  <div class="container">
    <div class="content">
      @if( Session::has('success') )
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <div class="alert alert-dismissible alert-success">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>Muy bien!</strong> {{ Session::get('success') }}
            </div>
          </div>
        </div>
      @endif
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 well bs-component">
          <form class="form-horizontal" action="/save" method="POST">
            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
            <fieldset>
              <legend>Registro</legend>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-10">
                  <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputName" class="col-lg-2 control-label">Nombre</label>
                <div class="col-lg-10">
                  <input type="text" name="name" class="form-control" id="inputName" placeholder="Nombre" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword" class="col-lg-2 control-label">Contraseña</label>
                <div class="col-lg-10">
                  <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Contraseña" required>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                  <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
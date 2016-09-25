<div class="container nav-list">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="{{ url('/') }}">Inicio</a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="@yield('listado', 'default')"><a href="{{ url('/') }}">Listado <span class="sr-only">(current)</span></a></li>
              <li class="@yield('registro', 'default')"><a href="{{ url('/new_user') }}">Registro</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>
</div>
<!DOCTYPE html>
<html>
    <head>
        <title>Real Time</title>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ url('css/me.css') }}" rel="stylesheet" type="text/css">
        <script src="{{ url('js/socket.io.js') }}"></script>
    </head>
    <body>
        @section('listado', 'active')
        @include('menu')
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <h1 class="text-center">Datos</h1>
                        <div class="well">
                            <input type="text" name="search" class="form-control" placeholder="Buscar usuario..." v-model="search" @keyup="searchUsers">
                        </div>
                        <pre>Datos totales: @{{ totalRegisters }} - Temporales: @{{ temporalRegisters }}</pre>
                        <table class="table table-striped table-hover" id="example">
                            <thead>
                                <tr class="info">
                                    <th>#</th>
                                    <th>Email</th>
                                    <th>Nombre</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(index, user) in showNow">
                                    <td>@{{ index + 1 + showBegin }}</td>
                                    <td>@{{ user.email }}</td>
                                    <td>@{{ user.name }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="btn-group btn-group-justified">
                            <a href="#" class="btn btn-default" @click="previous($event)">Anterior</a>
                            <a href="#" class="btn btn-default" @click="next($event)">Siguiente</a>
                        </div> 
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/vue.js') }}"></script>
        <script src="{{ asset('js/vue-resource.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>

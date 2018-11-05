<!DOCTYPE html>
<html lang="en" style="height: 100%">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Avicola - Login</title>
        @include('auth.login.partialsTemplate.head')

    </head>
    <body style="background-image: url(/img/template/backgrounds/backgroundIndex.jpg)" class="body-bg-full">
        <div class="container page-container">
            <div class="page-content">
                <div class="logo" style="color: white;">
                    <h1>Avicola</h1>
                </div>
                <form method="post" action="/validateLogin" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="text" placeholder="Usuario" name="usuario" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="password" placeholder="Contraseña" name="contrasena" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="checkbox-inline checkbox-custom pull-left">
                                <input id="exampleCheckboxRemember" type="checkbox" value="remember">
                                <label for="exampleCheckboxRemember" class="checkbox-muted text-muted">Recuerda me</label>
                            </div>
                            <div class="pull-right"><a href="/reset" class="inline-block form-control-static">Olvidate tu contraseña?</a></div>
                        </div>
                    </div>
                    <button type="submit" class="btn-lg btn btn-primary btn-rounded btn-block">Ingresar</button>
                </form>                
                <hr>
                <div class="clearfix">
                    <p class="text-muted mb-0 pull-left">Quieres una nueva cuenta?</p><a href="/register" class="inline-block pull-right">Registrate</a>
                </div>
            </div>
        </div>
        @include('auth.login.partialsTemplate.script')
    </body>
</html>
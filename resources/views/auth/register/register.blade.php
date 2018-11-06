<!DOCTYPE html>
<html lang="en" style="height: 100%">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Avicola - Registro</title>
        @include('auth.register.partialsTemplate.head')
    </head>
    <body style="background-image: url(/img/template/backgrounds/backgroundIndex.jpg)" class="body-bg-full">
        <div class="container page-container">
            <div class="page-content">
                <div class="logo" style="color: white;">
                    <h1>Avicola</h1>
                </div>
                <form method="POST" action="/validateRegister" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="text" placeholder="Usuario" name="usuario" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="email" placeholder="Email" name="email" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="password" placeholder="Contraseña" name="contrasena" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="password" placeholder="Confirmar contrseña" name="rcontrasena" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div style="margin-bottom: 7px" class="checkbox-inline checkbox-custom">
                                <input id="exampleCheckboxAgree" name="check" type="checkbox" value="acepto">
                                <label for="exampleCheckboxAgree" class="checkbox-muted text-muted">Acepto los terminos y condiciones.</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn-lg btn btn-primary btn-rounded btn-block">Registrarse</button>
                </form>
                <hr>
                <div class="clearfix">
                    <p class="text-muted mb-0 pull-left">Ya tienes una cuenta?    </p><a href="/login" class="inline-block pull-right">Ingresar</a>
                </div>
            </div>
        </div>
        @include('auth.register.partialsTemplate.script')
    </body>
</html>
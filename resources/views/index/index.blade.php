<!DOCTYPE html>
<html lang="en" style="height: 100%">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Avicola App - @yield('title')</title>

        @include('index.partialsTemplate.head')

    </head>
    <body style="background-image: url(img/template/backgrounds/backgroundIndex.jpg)" class="body-bg-full">
        <div class="container page-container" style="position: relative;">
            <div class="col-lg-8 col-sm-10 col-xs-12 col-lg-offset-2 col-sm-offset-1" style="padding: 30px;">
                <div class="row">
                    <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12" style="color: white;">
                        <h2>Avicola</h2>
                    </div>
                    <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12" style="padding: 20px;">
                        <a class="btn btn-outline btn-rounded btn-warning btn-lg pull-right" href="/login">Ingresar</a>
                        <a type="button" class="btn btn-outline btn-rounded btn-warning btn-lg pull-right" href="/register">Registrate</a>
                    </div>
                </div>

                <div class="row" style="margin-top: 45px;" >
                    <div class="col-sm-8 col-xs-10">
                        <h1 style="color:white; "><b>EL ÚNICO PORTAL EN CHILE QUE TE PERMITE TOMAR LA MEJOR DECISIÓN EN LA COMPRA Y VENTA DE TUS HUEVOS.</b></h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-5 col-md-6 col-sm-6 col-xs-10" style="padding: 5px; background: #FFB61E;"> 
                    </div>
                </div>

                <div class="row" style="margin-top: 30px;">
                    <div class="col-sm-8 col-xs-12">
                        <p style="color: #eee; font-size: 14pt;">BUSCA PRODUCTOS EN TU COMUNA</p>
                    </div>
                </div>

                <div class="row" style="margin-top: 30px;">
                    <form action="/home" method="GET">
                        <div class="col-sm-4 col-xs-6">
                            <select class="select2" name="comuna" style="width: 100%;">
                                <option disabled selected="">Seleccionar</option>

                                @foreach ($zones as $zone)
                                <option selected="">{{$zone['zonas']['zonDescripcion']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-4 col-xs-6">
                            <input type="submit" class="btn btn-outline btn-warning btn-lg" value="Buscar">
                        </div>
                    </form>
                </div>
                
            </div>
            <footer class="col-lg-12" style=" background: #00000066; position:absolute; bottom:0px; right:0px;">
                
            </footer>

        </div>

        @include('index.partialsTemplate.script')
    </body>
</html>
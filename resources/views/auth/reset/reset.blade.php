<!DOCTYPE html>
<html lang="en" style="height: 100%">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Avicola - Recuperar Contraseña</title>
       @include('auth.reset.partialsTemplate.head')
    </head>
    <body style="background-image: url(/img/template/backgrounds/backgroundIndex.jpg)" class="body-bg-full">
        <div class="container page-container">
            <div class="page-content">
                <div class="logo" style="color: white;">
                    <h1>Avicola</h1>
                </div>
                <h4 class="fs-16 text-white fw-300 mt-0">Recuperar contraseña</h4>
                <p class="text-muted">Ingresa el Email asociado a tu cuenta de Avicola para recuperar tu contraseña</p>
                <form method="get" action="index.html">
                    <div class="form-group">
                        <input type="text" placeholder="Ingresar Email" class="form-control">
                    </div>
                    <button type="submit" style="width: 130px" class="btn btn-primary btn-rounded">Recuperar</button>
                </form>
            </div>
        </div>
        <!-- Demo Settings start-->
        <div class="setting closed">
            <h5 class="fs-16 mt-0 mb-20 text-white">Background Images</h5>
            <ul class="list-inline">
                <li><a href="javascript:;" data-bg="14.jpg" class="inline-block body-bg"><img src="../build/images/thumbnails/14.jpg" width="60" alt="" class="img-rounded"></a></li>
                <li><a href="javascript:;" data-bg="15.jpg" class="inline-block body-bg"><img src="../build/images/thumbnails/15.jpg" width="60" alt="" class="img-rounded"></a></li>
                <li><a href="javascript:;" data-bg="16.jpg" class="inline-block body-bg"><img src="../build/images/thumbnails/16.jpg" width="60" alt="" class="img-rounded"></a></li>
            </ul>
            <ul class="list-inline mb-0">
                <li><a href="javascript:;" data-bg="17.jpg" class="inline-block body-bg"><img src="../build/images/thumbnails/17.jpg" width="60" alt="" class="img-rounded"></a></li>
                <li><a href="javascript:;" data-bg="18.jpg" class="inline-block body-bg"><img src="../build/images/thumbnails/18.jpg" width="60" alt="" class="img-rounded"></a></li>
                <li><a href="javascript:;" data-bg="19.jpg" class="inline-block body-bg"><img src="../build/images/thumbnails/19.jpg" width="60" alt="" class="img-rounded"></a></li>
            </ul>
        </div>
        @include('auth.reset.partialsTemplate.script')
    </body>
</html>
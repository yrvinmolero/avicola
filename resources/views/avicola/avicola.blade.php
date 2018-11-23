@extends('template')

@section('title', 'Perfil')

@section('modules')

@foreach($modules as $modul)
<li class="panel"><a href="{{$modul['modRoute']}}"><i class="{{$modul['modIcono']}}"></i><span class="sidebar-title">{{$modul['modDescripcion']}}</span></a></li>
@endforeach
@endsection

@section('content')
<div class="page-header clearfix">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mt-0 mb-5">Administrador Avicola</h4>
        </div>
    </div>
</div>
<div class="page-content container-fluid">
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="widget">
                <div class="widget-body">
                    <div class="clearfix">
                        <div class="pull-left">Total Ventas</div>
                    </div>
                    <div class="fs-30">1,206</div>
                    <div class="text-success"><i class="ti-arrow-up fs-12"></i> 2.43%</div>
                    <div id="flot-comment" style="height: 60px; float: right; width: 70%; margin-top: -40px; margin-right: -20px; padding: 0px; position: relative;"><canvas class="flot-base" width="160" height="48" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 201px; height: 60px;"></canvas><canvas class="flot-overlay" width="160" height="48" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 201px; height: 60px;"></canvas></div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="widget">
                <div class="widget-body">
                    <div class="clearfix">
                        <div class="pull-left">Utilidad</div>
                    </div>
                    <div class="fs-30">650</div>
                    <div class="text-success"><i class="ti-arrow-up fs-12"></i> 5.28%</div>
                    <div id="flot-order" style="height: 60px; float: right; width: 70%; margin-top: -40px; margin-right: -20px; padding: 0px; position: relative;"><canvas class="flot-base" width="160" height="48" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 201px; height: 60px;"></canvas><canvas class="flot-overlay" width="160" height="48" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 201px; height: 60px;"></canvas></div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="widget">
                <div class="widget-body">
                    <div class="clearfix">
                        <div class="pull-left">Acumulado</div>
                    </div>
                    <div class="fs-30">$20,320</div>
                    <div class="text-danger"><i class="ti-arrow-down fs-12"></i> 1.06%</div>
                    <div id="flot-revenue" style="height: 60px; float: right; width: 70%; margin-top: -40px; margin-right: -20px; padding: 0px; position: relative;"><canvas class="flot-base" width="160" height="48" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 201px; height: 60px;"></canvas><canvas class="flot-overlay" width="160" height="48" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 201px; height: 60px;"></canvas></div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="widget">
                <div class="widget-body">
                    <div class="clearfix">
                        <div class="pull-left">Venta Real</div>
                    </div>
                    <div class="fs-30">278</div>
                    <div class="text-danger"><i class="ti-arrow-down fs-12"></i> 3.76%</div>
                    <div id="flot-task" style="height: 60px; float: right; width: 70%; margin-top: -40px; margin-right: -20px; padding: 0px; position: relative;"><canvas class="flot-base" width="160" height="48" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 201px; height: 60px;"></canvas><canvas class="flot-overlay" width="160" height="48" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 201px; height: 60px;"></canvas></div>
                </div>
            </div>
        </div>
    </div>
    <div role="tabpanel">
        <ul role="tablist" class="nav nav-tabs mb-15">
            <li role="presentation" class="active">
                <a id="home-tab" href="#home" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
                    Blanco
                </a>
            </li>
            <li role="presentation" class="">
                <a id="profile-tab" href="#profile" role="tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">
                    Color
                </a>
            </li>
            <li role="presentation" class="">
                <a id="profile-tab" href="#profile" role="tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">
                    Blanco Libre
                </a>
            </li>
            <li role="presentation" class="">
                <a id="profile-tab" href="#profile" role="tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">
                    Color Libre
                </a>
            </li>
            <li role="presentation" class="">
                <a id="profile-tab" href="#profile" role="tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">
                    Campo
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div id="home" role="tabpanel" aria-labelledby="home-tab" class="tab-pane fade active in">
                <form>
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h3><?php
                                echo date('d/m/Y');
                                ?></h3>
                        </div>
                    </div>
                    <div class="row dataAvicola">
                        <div class=" widget-newAvicola">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div style="font-size: 18pt;">
                                    Valor n° 1
                                </div>
                                <div class="col-lg-6 col-md-6 col-xs-12 col-lg-offset-3">
                                    <div class="form-group">
                                        <label for="selectcategories">Tamaño</label>
                                        <select id="selectCategories-1-1" class="form-control" name="dataavicola[avicola][1][category]" style="width: 100%;">
                                            <option disabled selected="">Seleccione</option>
                                            @foreach ($categories as $category)
                                            <option value="{{$category['catID']}}">{{$category['catDescripcion']}}</option>
                                            @endforeach
                                        </select>
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="stock">Stock Inicial</label>
                                        <input id="input-stock-1-1" class="form-control" placeholder="Stock Inicial" name="dataavicola[avicola][1][stockinicial]">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="produccion">Producción</label>
                                        <input id="input-produccion-1-1" class="form-control" placeholder="Producción" name="dataavicola[avicola][1][produccion]">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xs-12" style="background: #9ef79ecf; border-bottom-left-radius: 20px;">
                                    <div class="form-group">
                                        <label for="compra">Compra</label>
                                        <input id="input-compra-1-1" class="form-control" placeholder="Compra" name="dataavicola[avicola][1][compra]">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xs-12" style="background: #9ef79ecf; border-top-right-radius: 20px;">
                                    <div class="form-group">
                                        <label for="ventas">Ventas</label>
                                        <input id="input-ventas-1-1" class="form-control" placeholder="Ventas" name="dataavicola[avicola][1][ventas]">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="sfinal">Stock Final</label>
                                        <input id="input-stockfinal-1-1" class="form-control" placeholder="Stock Final" name="dataavicola[avicola][1][stockfinal]">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <br>
                    <a onclick="addData();" type="submit" class="btn btn-outline btn-primary  pull-left"><i class="fa fa-plus"></i> Añadir datos</a>
                    <a onclick="storePublication();" type="submit" class="btn btn-outline btn-success  pull-right"><i class="fa fa-save"></i> Guardar</a>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('specificJS')

<script>
    $('#email').val($('#correo').val());
    $('#tel').val($('#telefono1').val());
    $('#facebook').val($('#facebook1').val());
    $('#twitter').val($('#twitter1').val());
    $('#linkedin').val($('#linkedin1').val());

    function saveData()
    {
        $.ajaxSetup({
            header: $('meta[name="_token"]').attr('content')
        })

        $.ajax({
            url: '/saveDataContact',
            type: 'POST',
            dataType: 'JSON',
            data: $("#formdatoscontacto").serialize(),
            beforeSend: function () {
                $("#formdatoscontacto").hide();
                $("#loading").show();
            },
            success: function (data) {


                if (data.successfull === true) {
                    alert('true');
                    font = "<i class='fa fa-check fa-5x' style='color: #4caf50;'></i>";
                    description = data.descripcion;

                } else {
                    alert('false');
                    font = "<i class='fa fa-times fa-5x' style='color: #f44336;'></i>";
                    description = data.descripcion;
                }
//
//                buttons = '<a href="/createPublications" class="btn btn-outline btn-warning"> Crear otra publicación</a>';
//                buttons += '<a href="/home" class="btn btn-outline btn-warning"> Ver listado de publicacion</a>';
//                $("#buttons").html(buttons);
//                console.log(description);
//                $("#font").html(font);
//
//                $("#description-message").html(description);
//
//                $("#loading").hide();
//                $("#response").show();

            }
        });
    }

    var avicola = $(".dataAvicola").html();

    function addData() {
        count = $(".widget-newAvicola").length + 1;
        if (count <= 6) {

            //reemplazamos ID de elementos sumandoles +1 despues del "-"
            addAvicola = avicola.replace('Valor n° 1', 'Valor n° ' + count);
            addAvicola = addAvicola.replace('<input value="1" hidden>', "<input value=" + count + ">");
            addAvicola = addAvicola.replace('selectCategories-1-1', "selectZones-1-" + count);
            addAvicola = addAvicola.replace('input-stock-1-1', "input-stock-1-" + count);
            addAvicola = addAvicola.replace('input-produccion-1-1', "input-produccion-1-" + count);
            addAvicola = addAvicola.replace('input-compra-1-1', "input-compra-1-" + count);
            addAvicola = addAvicola.replace('input-ventas-1-1', "input-ventas-1-" + count);
            addAvicola = addAvicola.replace('input-stockfinal-1-1', "input-stockfinal-1-" + count);
            addAvicola = addAvicola.replace("dataavicola[avicola][1][stockinicial]", 'dataavicola[avicola][' + count + '][stockinicial]');
            addAvicola = addAvicola.replace("dataavicola[avicola][1][produccion]", 'dataavicola[avicola][' + count + '][produccion]');
            addAvicola = addAvicola.replace("dataavicola[avicola][1][compra]", 'dataavicola[avicola][' + count + '][compra]');
            addAvicola = addAvicola.replace("dataavicola[avicola][1][ventas]", 'dataavicola[avicola][' + count + '][ventas]');
            addAvicola = addAvicola.replace("dataavicola[avicola][1][stockfinal]", 'dataavicola[avicola][' + count + '][stockfinal]');
            $(".dataAvicola").append(addAvicola);
        }

    }
</script>

@endsection

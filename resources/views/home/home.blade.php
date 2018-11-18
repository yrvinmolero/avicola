@extends('template')

@section('title', 'Home')

@section('modules')

@foreach($modules as $modul)
<li class="panel"><a href="{{$modul['modRoute']}}"><i class="{{$modul['modIcono']}}"></i><span class="sidebar-title">{{$modul['modDescripcion']}}</span></a></li>
@endforeach
@endsection

@section('content')

<div class="page-header clearfix">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mt-0 mb-5">Listado de publications</h4>
        </div>
        <div class="col-sm-6">
            <div class="btn-group mt-5">
                <a href="/createPublications" class="btn btn-outline btn-warning"><i class="fa fa-plus"></i> Crear una publicación</a>
            </div>
        </div>
    </div>
</div>
<div class="page-content container-fluid">
    <div class="page-content container-fluid p-0">
        <div class="row row-0 mailbox">
            @foreach($publications as $publication)
            <div class="col-md-6">
                <ul class="media-list inbox">
                    <li class="media">
                        <a  href="/details">
                            <div class="media-left avatar"><img src="/img/template/users/02.jpg" alt="" class="media-pub img-circle"><span class="status bg-success"></span></div>
                            <div class="media-body">
                                <h3 class="media-heading">{{$publication['pubTitulo']}}</h3>
                                <p class="summary">por {{$publication['usuarios']['nombre']}} - {{$publication['created_at']}}</p>
                                <p class="summary"><i class="fa fa-tasks"></i> Tipo: Distribuidor.</p>
                                <br>
                                <p style="font-size: 11pt">{{$publication['pubDescripcion']}}</p>
                            </div>
                        </a>
                        <button type="button" data-toggle="{{$publication['pubID']}}" data-target="#modal{{$publication['pubID']}}" class="btn btn-raised btn-primary mr-10 mb-10 pull-right" onclick="setModalProducts({{$publication['pubID']}}); $('#myLargeModalLabel').text('{{$publication['pubTitulo']}}'); $('.modal').attr('id',{{$publication['pubID']}}); $({{"'#".$publication['pubID']."'"}}).modal('show');">Mas productos</button>
                    </li>
                </ul>
            </div>    
            @endforeach
        </div>
    </div>
</div>

<div tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" class="modal fade bs-example-modal-lg" id="modal">
    <div role="document" class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                <h4 id="myLargeModalLabel" class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <table id="product-list" style="width: 100%" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">
                                <div class="checkbox-custom">
                                    <input id="checkAll" type="checkbox" value="option1">
                                    <label for="checkAll" class="pl-0">&nbsp;</label>
                                </div>
                            </th>
                            <th>Tipo</th>
                            <th class="text-right">Tamaño</th>
                            <th>Total Cajas</th>
                            <th class="text-center">Fecha Publicación</th>
                            <th class="text-center">Opciones</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> 
<div class="footer">2016 &copy;  <a href="http://themeforest.net/item/umega-responsive-web-app-kit/15482080">Umega - Responsive Web App Kit</a> by <a href="http://themeforest.net/user/lethemes" target="_blank">Lethemes.</a></div>
@endsection
@section('specificJS')

<script>
    function setModalProducts(pubID)
    {

    $.ajax({
    url: '/getProducts',
            type: 'GET',
            dataType: 'JSON',
            data: {
            pubID: pubID,
            },
            success: function (data) {
            var registers = "";
            var response = "";
            var check = "<div class='checkbox-custom'>" +
                    "<input id='product-01' type='checkbox' value='01'>" +
                    "<label for='product-01' class='pl-0'>&nbsp;</label>" +
                    "</div>";
            var options = "<div role='group' aria-label='Basic example' class='btn-group btn-group-sm'>" +
                    "<button type='button' class='btn btn-outline btn-primary'><i class='ti-eye'></i></button>" +
                    "<button type='button' class='btn btn-outline btn-success'><i class='ti-pencil'></i></button>" +
                    "<button type='button' class='btn btn-outline btn-danger'><i class='ti-trash'></i></button>" +
                    "</div>";
            $.each(data, function (i, getdata) {
            response += [
            {"data":check},
            {"data":getdata.stock.categoriasunidades.unidades.uniDescripcion},
            {"data":getdata.stock.categoriasunidades.categorias.catDescripcion},
            {"data":getdata.stock.stoCantidad},
            {"data":getdata.stock.created_at},
            {"data":options},
            ]
                    registers += "<tr>" +
                    "<td class='text-center'>" +
                    "<div class='checkbox-custom'>" +
                    "<input id='product-01' type='checkbox' value='01'>" +
                    "<label for='product-01' class='pl-0'>&nbsp;</label>" +
                    "</div>" +
                    "</td>" +
                    "<td>" + getdata.stock.categoriasunidades.unidades.uniDescripcion + "</td>" +
                    "<td class='text-right'>" + getdata.stock.categoriasunidades.categorias.catDescripcion + "</td>" +
                    "<td class='text-right'>" + getdata.stock.stoCantidad + "</td>" +
                    "<td class='text-right'>" + getdata.stock.created_at + "</td>" +
                    "<td class='text-center'>" +
                    "<div role='group' aria-label='Basic example' class='btn-group btn-group-sm'>" +
                    "<button type='button' class='btn btn-outline btn-primary'><i class='ti-eye'></i></button>" +
                    "<button type='button' class='btn btn-outline btn-success'><i class='ti-pencil'></i></button>" +
                    "<button type='button' class='btn btn-outline btn-danger'><i class='ti-trash'></i></button>" +
                    "</div>" +
                    "</td>" +
                    "</tr>";
            });
            $("#product-list #tbody").html(registers);
            }
    });
    }
</script>
@endsection

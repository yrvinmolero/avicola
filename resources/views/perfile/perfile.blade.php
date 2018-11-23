@extends('template')

@section('title', 'Perfil')

@section('modules')

@foreach($modules as $modul)
<li class="panel"><a href="{{$modul['modRoute']}}"><i class="{{$modul['modIcono']}}"></i><span class="sidebar-title">{{$modul['modDescripcion']}}</span></a></li>
@endforeach
@endsection

@section('content')
<div class="page-content container-fluid p-0">
    <div class="row row-0">
        <div class="col-lg-12">
            <div class="overlay-container text-white"><img src="/img/template/backgrounds/profile.png" alt="" class="overlay-bg img-responsive">
                <div style="padding: 120px 30px 30px 30px" class="overlay-content clearfix">
                    <div class="pull-left media">
                        <div class="media-left">
                            <a href="javascript:void(0)" style="display: block; border-radius: 50%; padding: 3px; background-color: #fff;">
                                <img src="/img/template/users/06.jpg" width="100" alt="" class="media-object img-circle">
                            </a>
                        </div>
                        <div style="width: auto" class="media-body media-middle">
                            <h2 class="media-heading">{{ Session::get('name') }}</h2>
                            <div class="fs-20">
                                @foreach($establecimientos as $tipo)
                                {{$tipo['usuariotipos']['ustDescripcion']}}
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="pull-right text-center">
                        <ul class="list-inline">
                            <li>
                                <div class="fs-24 fw-500">0</div>
                                <p>Ventas</p>
                            </li>
                            <li>
                                <div class="fs-24 fw-500">0</div>
                                <p>Compras</p>
                            </li>
                            <li>
                                <div class="fs-24 fw-500">0</div>
                                <p>Pedidos</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row ml-10 mr-10 pt-10">
        <div class="col-md-3">
            <div class="widget clear">
                <div class="widget-heading">
                    <h3 class="widget-title">
                        Datos de contacto
                        <a href="" data-toggle="modal" data-target="#modal-">
                            <i class="fas fa-pencil-alt pull-right" data-toggle="tooltip" data-placement="top" title="Editar"></i>
                        </a>
                    </h3>
                </div>
                <div class="widget-body">
                    <ul class="media-list mb-0">
                        @foreach($datausers as $data)
                        <li class="media">
                            <div class="media-left"><i class="far fa-envelope"></i></div>
                            <div class="media-body">
                                <input hidden id="correo" value="{{$data['correo']}}">
                                <input hidden id="telefono1" value="{{$data['telefono']}}">
                                <input hidden id="facebook1" value="{{$data['facebook']}}">
                                <input hidden id="twitter1" value="{{$data['twitter']}}">
                                <input hidden id="linkedin1" value="{{$data['linkedin']}}">
                                <p>{{$data['correo']}}</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left"><i class="fab fa-whatsapp"></i></div>
                            <div class="media-body">
                                @if($data['telefono'])
                                <p>{{$data['telefono']}}</p>
                                @else
                                <p>-</p>
                                @endif
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left"><i class="fab fa-facebook"></i></div>
                            <div class="media-body">
                                @if($data['facebook'])
                                <p>{{$data['facebook']}}</p>
                                @else
                                <p>-</p>
                                @endif
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left"><i class="fab fa-twitter"></i></div>
                            <div class="media-body">
                                @if($data['twitter'])
                                <p>{{$data['twitter']}}</p>
                                @else
                                <p>-</p>
                                @endif
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left"><i class="fab fa-linkedin"></i></div>
                            <div class="media-body">
                                @if($data['linkedin'])
                                <p>{{$data['linkedin']}}</p>
                                @else
                                <p>-</p>
                                @endif
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="widget clear">
                <div class="widget-heading">
                    <h3 class="widget-title">
                        Mis Establecimientos
                        <a href="" data-toggle="modal" data-target="#modal-establecimiento">
                            <i class="fas fa-pencil-alt pull-right" data-toggle="tooltip" data-placement="top" title="Editar"></i>
                        </a>
                    </h3>
                </div>
                <div class="widget-body">
                    <div id="accordion" role="tablist" aria-multiselectable="true" class="panel-group mb-0">
                        @foreach($establecimientos as $establecimiento)
                        <div class="panel panel-default">
                            <div id="headingOne" role="tab" class="panel-heading">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-{{ $establecimiento['estID'] }}" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                        {{ $establecimiento['estDescripcion'] }} - {{ $establecimiento['usuariotipos']['ustDescripcion'] }}
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse-{{ $establecimiento['estID'] }}" role="tabpanel" aria-labelledby="headingOne" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body">
                                    <ul class="media-list mb-0">
                                        <li class="media">
                                            <div class="media-left"><i class="fas fa-globe-americas"></i></div>
                                            <div class="media-body">
                                                <p>{{ $establecimiento['zonas']['zonDescripcion'] }}</p>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-left"><i class="fas fa-map-marker-alt"></i></div>
                                            <div class="media-body">
                                                <p>{{ $establecimiento['estDireccion'] }}</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--modal agregar datos de contacto-->
<div tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" class="modal fade bs-example-modal-lg" id="modal-">
    <div role="document" class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                <h4 id="myLargeModalLabel" class="modal-title">Datos de Contacto</h4>
            </div>
            <div class="modal-body">
                <div class="col-xs-12" hidden id="loading">
                    <div class="loading-demo text-center">
                        <div class="sk-double-bounce" style="margin:0 !important;">
                            <div class="sk-child sk-double-bounce1"></div>
                            <div class="sk-child sk-double-bounce2"></div>
                        </div>
                        <h5>&nbsp; Guardando datos, por favor espere...</h5>
                    </div>
                </div> 
                <form id="formdatoscontacto">
                    {{csrf_field()}}
                    <div class="form-group">
                        <div class="col-lg-12">
                            <div class="col-lg-6">
                                <br>
                                <label for="email">Email <span style="color: red;">*</span></label>
                                <input id="email" name="personalData[email]" type="text" placeholder="Ingresar email" class="form-control" required>
                            </div>
                            <div class="col-lg-6">
                                <br>
                                <label for="tel">Whatsapp <span style="color: red;">*</span></label>
                                <input id="tel" name="personalData[tel]" type="tel" placeholder="Ingresar Whatsapp" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <div class="col-lg-6">
                                <br>
                                <label for="facebook">Cuenta Facebook</label>
                                <input id="facebook" name="personalData[facebook]" type="url" placeholder="Ingresar Facebook" class="form-control">
                            </div>
                            <div class="col-lg-6">
                                <br>
                                <label for="twitter">Cuenta Twitter</label>
                                <input id="twitter" name="personalData[twitter]" type="url" placeholder="Ingresar Twitter" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <div class="col-lg-12">
                                <br>
                                <label for="linkedin">Cuenta Linkedin</label>
                                <input id="linkedin" name="personalData[linkedin]" type="url" placeholder="Ingresar Linkedin" class="form-control">
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" onclick="saveData()">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--modal agregar datos de contacto-->

<!--modal agregar establecimiento-->
<div tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" class="modal fade bs-example-modal-lg" id="modal-establecimiento">
    <div role="document" class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                <h4 id="myLargeModalLabel" class="modal-title">Nuevo Establecimiento</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <div class="col-lg-6">
                                <br>
                                <label for="nombre">Nombre <span style="color: red;">*</span></label>
                                <input id="nombre" type="text" placeholder="Ingresar Nombre" class="form-control" required>
                            </div>
                            <div class="col-lg-6">
                                <br>
                                <label for="descripcion">Descripción <span style="color: red;">*</span></label>
                                <input id="descripcion" type="text" placeholder="Ingresar Descripción" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <div class="col-lg-6">
                                <br>
                                <select class="select2" name="comuna" style="width: 100%;">
                                    <option disabled selected="">Seleccionar</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <br>
                                <label for="twitter">Cuenta Twitter</label>
                                <input id="twitter" type="url" placeholder="Ingresar Twitter" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <div class="col-lg-12">
                                <br>
                                <label for="linkedin">Cuenta Linkedin</label>
                                <input id="linkedin" type="url" placeholder="Ingresar Linkedin" class="form-control">
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--modal agregar establecimiento-->
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

</script>

@endsection

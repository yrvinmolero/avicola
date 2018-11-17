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
                        <li class="media">
                            <div class="media-left"><i class="far fa-envelope"></i></div>
                            <div class="media-body">
                                <p>lethemes@gmail.com</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left"><i class="fab fa-whatsapp"></i></div>
                            <div class="media-body">
                                <p>(251) 300-2770</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left"><i class="fab fa-facebook"></i></div>
                            <div class="media-body">
                                <p>Facebook</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left"><i class="fab fa-twitter"></i></div>
                            <div class="media-body">
                                <p>Twitter</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left"><i class="fab fa-linkedin"></i></div>
                            <div class="media-body">
                                <p>Linkedin</p>
                            </div>
                        </li>
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
                <form method="POST" action="">
                    <div class="form-group">
                        <div class="col-lg-12">
                            <div class="col-lg-6">
                                <br>
                                <label for="email">Email <span style="color: red;">*</span></label>
                                <input id="email" type="text" placeholder="Ingresar email" class="form-control" required>
                            </div>
                            <div class="col-lg-6">
                                <br>
                                <label for="tel">Whatsapp <span style="color: red;">*</span></label>
                                <input id="tel" type="tel" placeholder="Ingresar Whatsapp" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <div class="col-lg-6">
                                <br>
                                <label for="facebook">Cuenta Facebook</label>
                                <input id="facebook" type="url" placeholder="Ingresar Facebook" class="form-control">
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
                <form method="POST" action="">
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
@stop

@extends('template')

@section('title', 'Home')

@section('modules')

    @foreach($modules as $modul)
        <li class="panel"><a href="widgets.html"><i class="fa fa-sign-in"></i><span class="sidebar-title">{{$modul['modDescripcion']}}</span></a></li>
    @endforeach
@endsection

@section('content')
<div class="page-header clearfix">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mt-0 mb-5">Blank Template</h4>
            <ol class="breadcrumb mb-0">
                <li><a href="#">Umega</a></li>
                <li><a href="#">Extra Pages</a></li>
                <li class="active">Blank Template</li>
            </ol>
        </div>
        <div class="col-sm-6">
            <div class="btn-group mt-5">
                <button type="button" class="btn btn-default btn-outline"><i class="flag-icon flag-icon-us mr-5"></i> English</button>
                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-default btn-outline dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                <ul class="dropdown-menu dropdown-menu-right animated fadeInDown">
                    <li><a href="#"><i class="flag-icon flag-icon-de mr-5"></i> German</a></li>
                    <li><a href="#"><i class="flag-icon flag-icon-fr mr-5"></i> French</a></li>
                    <li><a href="#"><i class="flag-icon flag-icon-es mr-5"></i> Spanish</a></li>
                    <li><a href="#"><i class="flag-icon flag-icon-it mr-5"></i> Italian</a></li>
                    <li><a href="#"><i class="flag-icon flag-icon-jp mr-5"></i> Japanese</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="page-content container-fluid">
    <div class="page-content container-fluid p-0">
        <div class="row row-0 mailbox">
            <div class="col-md-6">
                <ul class="media-list inbox">
                    @foreach($publications as $publication)
                    <li class="media">
                        <a href="javascript:;">
                            <div class="media-left avatar"><img src="/img/template/users/02.jpg" alt="" class="media-pub img-circle"><span class="status bg-success"></span></div>
                            <div class="media-body">
                                <h4 class="media-heading">{{$publication['publicaciones']['pubTitulo']}}</h4>
                                <p class="summary">por {{$publication['publicaciones']['usuarios']['nombre']}} - {{$publication['publicaciones']['pubFecReg']}}</p>
                                <p class="summary"><i class="fa fa-tasks"></i> Tipo: Blanco.</p>
                                <p class="summary"><i class="fa fa-ellipsis-h"></i> Clasif: Jumbo.</p>
                                <p class="summary"><i class="fa fa-truck"></i> Distribucación: Bandeja.</p>
                                <h3><b>$5.000</b></h3>
                            </div>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            
        </div>
    </div>
</div>
<div class="footer">2016 &copy;  <a href="http://themeforest.net/item/umega-responsive-web-app-kit/15482080">Umega - Responsive Web App Kit</a> by <a href="http://themeforest.net/user/lethemes" target="_blank">Lethemes.</a></div>
@stop

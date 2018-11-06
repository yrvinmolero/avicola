@extends('template')

@section('title', 'Detalles')

@section('modules')

@foreach($modules as $modul)
<li class="panel"><a href="{{$modul['modRoute']}}"><i class="{{$modul['modIcono']}}"></i><span class="sidebar-title">{{$modul['modDescripcion']}}</span></a></li>
@endforeach
@endsection

@section('content')
<!-- Main Sidebar end-->
<div class="page-header clearfix">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mt-0 mb-5">Profile</h4>
            <ol class="breadcrumb mb-0">
                <li><a href="#">Umega</a></li>
                <li><a href="#">User Pages</a></li>
                <li class="active">Profile</li>
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
<div class="page-content container-fluid p-0">
    <div class="row row-0">
        <div class="col-lg-12">
            <div class="overlay-container text-white"><img src="/img/template/backgrounds/profile.png" alt="" class="overlay-bg img-responsive">
                <div style="padding: 120px 30px 30px 30px" class="overlay-content clearfix">
                    <div class="pull-left media">
                        <div class="media-left"><a href="javascript:void(0)" style="display: block; border-radius: 50%; padding: 3px; background-color: #fff;"><img src="/img/template/users/06.jpg" width="100" alt="" class="media-object img-circle"></a></div>
                        <div style="width: auto" class="media-body media-middle">
                            <h2 class="media-heading">Ventas de Huevos LTDA</h2>
                            <div class="fs-20">Ventas</div>
                        </div>
                    </div>
                    <div class="pull-right text-center">
                        <ul class="list-inline">
                            <li>
                                <div class="fs-24 fw-500">208</div>
                                <p>Ventas</p>
                            </li>
                            <li>
                                <div class="fs-24 fw-500">560</div>
                                <p>Compras</p>
                            </li>
                            <li>
                                <div class="fs-24 fw-500">95</div>
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
                    <h3 class="widget-title">Info Personal</h3>
                </div>
                <div class="widget-body">
                    <ul class="media-list mb-0">
                        <li class="media">
                            <div class="media-left"><i class="ti-briefcase text-info"></i></div>
                            <div class="media-body">
                                <p>Ventas de Huevos LTDA.</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left"><i class="ti-gift text-info"></i></div>
                            <div class="media-body">
                                <p>20 October 1990</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left"><i class="ti-email text-info"></i></div>
                            <div class="media-body">
                                <p>lethemes@gmail.com</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left"><i class="ti-home text-info"></i></div>
                            <div class="media-body">
                                <p>4270 Cottage Hill Road</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left"><i class="ti-mobile text-info"></i></div>
                            <div class="media-body">
                                <p>(251) 300-2770</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left"><i class="ti-world text-info"></i></div>
                            <div class="media-body">
                                <p>www.lethemes.net</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="widget clear">
                <div class="widget-heading">
                    <h3 class="widget-title">Empresar</h3>
                </div>
                <div class="widget-body">
                    <p>Descripcion de la empresa.</p>
                </div>
            </div>
            <div class="widget clear">
                <div class="widget-heading">
                    <h3 class="widget-title">Estadisticas</h3>
                </div>
                <div class="widget-body">
                    <ul class="list-unstyled mb-0">
                        <li>
                            <div class="block clearfix mb-5"><span class="pull-left fs-12">HTML5</span><span class="pull-right label label-outline label-primary">95%</span></div>
                            <div class="progress progress-xs">
                                <div role="progressbar" data-transitiongoal="85" class="progress-bar"></div>
                            </div>
                        </li>
                        <li>
                            <div class="block clearfix mb-5"><span class="pull-left fs-12">CSS</span><span class="pull-right label label-outline label-success">98%</span></div>
                            <div class="progress progress-xs">
                                <div role="progressbar" data-transitiongoal="98" class="progress-bar progress-bar-success"></div>
                            </div>
                        </li>
                        <li>
                            <div class="block clearfix mb-5"><span class="pull-left fs-12">Javascript</span><span class="pull-right label label-outline label-purple">85%</span></div>
                            <div class="progress progress-xs">
                                <div role="progressbar" data-transitiongoal="85" class="progress-bar progress-bar-purple"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="widget clear">
                <div class="widget-heading">
                    <div class="media">
                        <div class="media-left"><img src="/img/template/users/10.jpg" alt="" class="media-object mo-lg img-circle"></div>
                        <div class="media-body media-middle">
                            <p class="mb-0"><span class="fw-500">Philip Fernandez</span> uploaded a new photo</p>
                            <time datetime="2015-12-10T20:50:48+07:00" class="text-muted fs-12">20 Jan 2016 <i class="ti-time"></i> 12:03 PM</time>
                        </div>
                    </div>
                </div>
                <div class="widget-body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="thumbnail"><img src="/img/template/backgrounds/02.jpg" alt="">
                        <div class="text-right caption">
                            <ul class="list-inline mb-0">
                                <li><i class="ti-comment text-info"></i> 239</li>
                                <li><i class="ti-heart text-danger"></i> 4325</li>
                                <li><i class="ti-share text-success"></i> 3654</li>
                            </ul>
                        </div>
                    </div>
                    <ul class="media-list">
                        <li class="media">
                            <div class="media-left avatar"><img alt="" src="/img/template/users/01.jpg" class="media-object img-circle"><span class="status bg-success"></span></div>
                            <div class="media-body">
                                <h5 class="media-heading inline-block">Philip Fernandez</h5>
                                <time datetime="2015-12-10T20:50:48+07:00" class="text-muted fs-12">20 Jan 2016 <i class="ti-time"></i> 12:12 PM</time>
                                <p>Mission accomplished. It's revolutionary.</p>
                                <div class="media">
                                    <div class="media-left avatar"><img alt="" src="/img/template/users/12.jpg" class="media-object img-circle"><span class="status bg-success"></span></div>
                                    <div class="media-body">
                                        <h5 class="media-heading inline-block">Carolyn Hernandez</h5>
                                        <time datetime="2015-12-10T20:50:48+07:00" class="text-muted fs-12">20 Jan 2016 <i class="ti-time"></i> 12:14 PM</time>
                                        <p>Vastly thought out! Found myself staring at it for minutes.</p>
                                        <div class="media">
                                            <div class="media-left avatar"><img alt="" src="/img/template/users/11.jpg" class="media-object img-circle"><span class="status bg-success"></span></div>
                                            <div class="media-body">
                                                <h5 class="media-heading inline-block">Johnny Shaw</h5>
                                                <time datetime="2015-12-10T20:50:48+07:00" class="text-muted fs-12">20 Jan 2016 <i class="ti-time"></i> 12:15 PM</time>
                                                <p>Let me take a nap... great colour palette, anyway.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left avatar"><img alt="" src="/img/template/users/14.jpg" class="media-object img-circle"><span class="status bg-success"></span></div>
                                    <div class="media-body">
                                        <h5 class="media-heading inline-block">Jean Boyd</h5>
                                        <time datetime="2015-12-10T20:50:48+07:00" class="text-muted fs-12">20 Jan 2016 <i class="ti-time"></i> 12:14 PM</time>
                                        <p>
                                            This camera angle has navigated right into my heart.
                                            My 32 year old parent rates this icons very cool :)
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="widget clear">
                <div class="widget-heading">
                    <div class="media">
                        <div class="media-left"><img src="/img/template/users/12.jpg" alt="" class="media-object mo-lg img-circle"></div>
                        <div class="media-body media-middle">
                            <p class="mb-0"><span class="fw-500">Pamela Day</span> at <span class="fw-500">Los Angeles</span></p>
                            <time datetime="2015-12-10T20:50:48+07:00" class="text-muted fs-12">20 Jan 2016 <i class="ti-time"></i> 9:29 PM</time>
                        </div>
                    </div>
                </div>
                <div class="widget-body">
                    <p>Looks fun and good :-)</p>
                    <div class="thumbnail">
                        <div id="simpleMap" style="height:350px;"></div>
                        <div class="text-right caption">
                            <ul class="list-inline mb-0">
                                <li><i class="ti-comment text-info"></i> 43</li>
                                <li><i class="ti-heart text-danger"></i> 437</li>
                                <li><i class="ti-share text-success"></i> 651</li>
                            </ul>
                        </div>
                    </div>
                    <ul class="media-list">
                        <li class="media">
                            <div class="media-left avatar"><img alt="" src="/img/template/users/01.jpg" class="media-object img-circle"><span class="status bg-success"></span></div>
                            <div class="media-body">
                                <h5 class="media-heading inline-block">Philip Fernandez</h5>
                                <time datetime="2015-12-10T20:50:48+07:00" class="text-muted fs-12">20 Jan 2016 <i class="ti-time"></i> 12:12 PM</time>
                                <p>Mission accomplished. It's revolutionary.</p>
                                <div class="media">
                                    <div class="media-left avatar"><img alt="" src="/img/template/users/12.jpg" class="media-object img-circle"><span class="status bg-success"></span></div>
                                    <div class="media-body">
                                        <h5 class="media-heading inline-block">Carolyn Hernandez</h5>
                                        <time datetime="2015-12-10T20:50:48+07:00" class="text-muted fs-12">20 Jan 2016 <i class="ti-time"></i> 12:14 PM</time>
                                        <p>Vastly thought out! Found myself staring at it for minutes.</p>
                                        <div class="media">
                                            <div class="media-left avatar"><img alt="" src="/img/template/users/11.jpg" class="media-object img-circle"><span class="status bg-success"></span></div>
                                            <div class="media-body">
                                                <h5 class="media-heading inline-block">Johnny Shaw</h5>
                                                <time datetime="2015-12-10T20:50:48+07:00" class="text-muted fs-12">20 Jan 2016 <i class="ti-time"></i> 12:15 PM</time>
                                                <p>Let me take a nap... great colour palette, anyway.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left avatar"><img alt="" src="/img/template/users/14.jpg" class="media-object img-circle"><span class="status bg-success"></span></div>
                                    <div class="media-body">
                                        <h5 class="media-heading inline-block">Jean Boyd</h5>
                                        <time datetime="2015-12-10T20:50:48+07:00" class="text-muted fs-12">20 Jan 2016 <i class="ti-time"></i> 12:14 PM</time>
                                        <p>
                                            This camera angle has navigated right into my heart.
                                            My 32 year old parent rates this icons very cool :)
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="widget clear">
                <div class="widget-heading">
                    <h3 class="widget-title">Equipo de Tranajo</h3>
                </div>
                <div class="widget-body">
                    <ul class="media-list mb-0">
                        <li class="media"><a href="javascript:;" class="conversation-toggle">
                                <div class="media-left avatar"><img src="/img/template/users/10.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                                <div class="media-body">
                                    <h5 class="media-heading">Philip Fernandez</h5>
                                    <p class="text-muted mb-0">489 Rhapsody Street</p>
                                </div></a></li>
                        <li class="media"><a href="javascript:;" class="conversation-toggle">
                                <div class="media-left avatar"><img src="/img/template/users/20.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                                <div class="media-body">
                                    <h5 class="media-heading">Mary Carr</h5>
                                    <p class="text-muted mb-0">3611 West Fork Drive</p>
                                </div></a></li>
                        <li class="media"><a href="javascript:;" class="conversation-toggle">
                                <div class="media-left avatar"><img src="/img/template/users/11.jpg" alt="" class="media-object img-circle"><span class="status bg-danger"></span></div>
                                <div class="media-body">
                                    <h5 class="media-heading">Joseph Salazar</h5>
                                    <p class="text-muted mb-0">4489 Hart Ridge Road</p>
                                </div></a></li>
                        <li class="media"><a href="javascript:;" class="conversation-toggle">
                                <div class="media-left avatar"><img src="/img/template/users/06.jpg" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
                                <div class="media-body">
                                    <h5 class="media-heading">John Cruz</h5>
                                    <p class="text-muted mb-0">3274 Lyndon Street</p>
                                </div></a></li>
                        <li class="media"><a href="javascript:;" class="conversation-toggle">
                                <div class="media-left avatar"><img src="/img/template/users/19.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                                <div class="media-body">
                                    <h5 class="media-heading">Jacqueline Rios</h5>
                                    <p class="text-muted mb-0">559 Holly Street</p>
                                </div></a></li>
                    </ul>
                </div>
            </div>
            <div class="widget clear">
                <div class="widget-heading">
                    <h3 class="widget-title">Activities</h3>
                </div>
                <div class="widget-body">
                    <ul class="media-list mb-0">
                        <li class="media">
                            <div class="media-left"><i class="ti-control-record text-info"></i></div>
                            <div class="media-body">
                                <p>Recommended Karen Ortega</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left"><i class="ti-control-record text-danger"></i></div>
                            <div class="media-body">
                                <p>Retweeted George Lewis</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left"><i class="ti-control-record text-warning"></i></div>
                            <div class="media-body">
                                <p>Followed Olivia Williamson</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left"><i class="ti-control-record text-success"></i></div>
                            <div class="media-body">
                                <p>Replied to Janice Davis</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left"><i class="ti-control-record text-primary"></i></div>
                            <div class="media-body">
                                <p>Favorited Arthur Gomez</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer">2016 &copy;  <a href="http://themeforest.net/item/umega-responsive-web-app-kit/15482080">Umega - Responsive Web App Kit</a> by <a href="http://themeforest.net/user/lethemes" target="_blank">Lethemes.</a></div>
<!-- Right Sidebar start-->
<aside class="right-sidebar closed">
    <ul role="tablist" class="nav nav-tabs nav-justified nav-sidebar">
        <li role="presentation" class="active"><a href="#chat" aria-controls="chat" role="tab" data-toggle="tab"><i class="ti-comment-alt"></i></a></li>
        <li role="presentation"><a href="#announcement" aria-controls="announcement" role="tab" data-toggle="tab"><i class="ti-announcement"></i></a></li>
        <li role="presentation"><a href="#ticket" aria-controls="ticket" role="tab" data-toggle="tab"><i class="ti-bookmark-alt"></i></a></li>
        <li role="presentation"><a href="#setting" aria-controls="setting" role="tab" data-toggle="tab"><i class="ti-settings"></i></a></li>
    </ul>
    <div data-mcs-theme="minimal-dark" class="tab-content nav-sidebar-content mCustomScrollbar">
        <div id="chat" role="tabpanel" class="tab-pane fade in active">
            <form>
                <div class="form-group has-feedback">
                    <input type="text" aria-describedby="inputChatSearch" placeholder="Chat with..." class="form-control rounded"><span aria-hidden="true" class="ti-search form-control-feedback"></span><span id="inputChatSearch" class="sr-only">(default)</span>
                </div>
            </form>
            <ul class="chat-list mb-0 fs-12 media-list">
                <li class="media"><a href="javascript:;" class="conversation-toggle">
                        <div class="media-left avatar"><img src="/img/template/users/20.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                        <div class="media-body">
                            <h6 class="media-heading">Jane Curtis</h6>
                            <p class="text-muted mb-0">Where are you from?</p>
                        </div>
                        <div class="media-right"><span class="badge bg-danger">2</span></div></a></li>
                <li class="media"><a href="javascript:;" class="conversation-toggle">
                        <div class="media-left avatar"><img src="/img/template/users/01.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                        <div class="media-body">
                            <h6 class="media-heading">Edward Garcia</h6>
                            <p class="text-muted mb-0">Nice to meet you.</p>
                        </div></a></li>
                <li class="media"><a href="javascript:;" class="conversation-toggle">
                        <div class="media-left avatar"><img src="/img/template/users/02.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                        <div class="media-body">
                            <h6 class="media-heading">Bruce Olson</h6>
                            <p class="text-muted mb-0">What do you want to do?</p>
                        </div></a></li>
                <li class="media"><a href="javascript:;" class="conversation-toggle">
                        <div class="media-left avatar"><img src="/img/template/users/03.jpg" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
                        <div class="media-body">
                            <h6 class="media-heading">Martha Rodriguez</h6>
                            <p class="text-muted mb-0">I'm hungry.</p>
                        </div>
                        <div class="media-right"><span class="badge bg-danger">1</span></div></a></li>
                <li class="media"><a href="javascript:;" class="conversation-toggle">
                        <div class="media-left avatar"><img src="/img/template/users/05.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                        <div class="media-body">
                            <h6 class="media-heading">Hannah Williamson</h6>
                            <p class="text-muted mb-0">Do you know the address?</p>
                        </div></a></li>
                <li class="media"><a href="javascript:;" class="conversation-toggle">
                        <div class="media-left avatar"><img src="/img/template/users/06.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                        <div class="media-body">
                            <h6 class="media-heading">Anthony Mills</h6>
                            <p class="text-muted mb-0">No problem.</p>
                        </div></a></li>
                <li class="media"><a href="javascript:;" class="conversation-toggle">
                        <div class="media-left avatar"><img src="/img/template/users/07.jpg" alt="" class="media-object img-circle"><span class="status bg-warning"></span></div>
                        <div class="media-body">
                            <h6 class="media-heading">Ethan Stanley</h6>
                            <p class="text-muted mb-0">Hello?</p>
                        </div></a></li>
                <li class="media"><a href="javascript:;" class="conversation-toggle">
                        <div class="media-left avatar"><img src="/img/template/users/08.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                        <div class="media-body">
                            <h6 class="media-heading">Jonathan Castro</h6>
                            <p class="text-muted mb-0">OK. Thanks.</p>
                        </div>
                        <div class="media-right"><span class="badge bg-danger">1</span></div></a></li>
                <li class="media"><a href="javascript:;" class="conversation-toggle">
                        <div class="media-left avatar"><img src="/img/template/users/09.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
                        <div class="media-body">
                            <h6 class="media-heading">Denise Rose</h6>
                            <p class="text-muted mb-0">Bye bye.</p>
                        </div></a></li>
                <li class="media"><a href="javascript:;" class="conversation-toggle">
                        <div class="media-left avatar"><img src="/img/template/users/10.jpg" alt="" class="media-object img-circle"><span class="status bg-danger"></span></div>
                        <div class="media-body">
                            <h6 class="media-heading">Eugene Meyer</h6>
                            <p class="text-muted mb-0">How are you?</p>
                        </div></a></li>
            </ul>
        </div>
        <div id="announcement" role="tabpanel" class="tab-pane fade">
            <ul class="media-list mb-0 fs-12">
                <li class="media">
                    <div class="media-left"><i class="ti-bar-chart-alt media-object mo-xs img-circle bg-primary text-center"></i></div>
                    <div class="media-body">
                        <h6 class="media-heading">Market Trend Data</h6>
                        <p class="text-muted mb-0">Mattis nam fringilla dui nostra, ad fames fusce venenatis massa.</p>
                    </div>
                </li>
                <li class="media">
                    <div class="media-left"><i class="ti-package media-object mo-xs img-circle bg-success text-center"></i></div>
                    <div class="media-body">
                        <h6 class="media-heading">Change Your Password!</h6>
                        <p class="text-muted mb-0">Varius dolor condimentum hendrerit eleifend est urna neque fames faucibus?</p>
                    </div>
                </li>
                <li class="media">
                    <div class="media-left"><i class="ti-gift media-object mo-xs img-circle bg-warning text-center"></i></div>
                    <div class="media-body">
                        <h6 class="media-heading">We Apologize</h6>
                        <p class="text-muted mb-0">Justo at mauris ridiculus conubia penatibus dis varius proin porttitor!</p>
                    </div>
                </li>
                <li class="media">
                    <div class="media-left"><i class="ti-harddrives media-object mo-xs img-circle bg-info text-center"></i></div>
                    <div class="media-body">
                        <h6 class="media-heading">Content Policy Update</h6>
                        <p class="text-muted mb-0">Quis ante imperdiet a volutpat quam tellus condimentum blandit elementum.</p>
                    </div>
                </li>
                <li class="media">
                    <div class="media-left"><i class="ti-mobile media-object mo-xs img-circle bg-purple text-center"></i></div>
                    <div class="media-body">
                        <h6 class="media-heading">Mobile Apps</h6>
                        <p class="text-muted mb-0">Ad iaculis at feugiat integer lobortis vivamus hac egestas venenatis.</p>
                    </div>
                </li>
                <li class="media">
                    <div class="media-left"><i class="ti-alarm-clock media-object mo-xs img-circle bg-danger text-center"></i></div>
                    <div class="media-body">
                        <h6 class="media-heading">New Features</h6>
                        <p class="text-muted mb-0">Primis elementum facilisi tristique faucibus feugiat enim rutrum id himenaeos.</p>
                    </div>
                </li>
            </ul>
        </div>
        <div id="ticket" role="tabpanel" class="tab-pane fade">
            <form>
                <div class="form-group">
                    <input type="text" placeholder="Username" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Subject" class="form-control">
                </div>
                <div class="form-group">
                    <textarea rows="6" placeholder="Description" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-block btn-success">Create Ticket</button>
            </form>
        </div>
        <div id="setting" role="tabpanel" class="tab-pane fade">
            <form class="form-horizontal fs-12">
                <div class="clearfix">
                    <h6 class="pull-left">Maintenance Mode</h6>
                    <div class="switch pull-right">
                        <input id="setting-1" type="checkbox" checked="">
                        <label for="setting-1" class="switch-success"></label>
                    </div>
                </div>
                <p class="text-muted">Ipsum non tempor non nullam nisi congue nisi amet enim.</p>
                <div class="clearfix">
                    <h6 class="pull-left">Location Services</h6>
                    <div class="switch pull-right">
                        <input id="setting-2" type="checkbox" checked="">
                        <label for="setting-2" class="switch-success"></label>
                    </div>
                </div>
                <p class="text-muted">Eleifend suscipit erat cursus viverra commodo nostra sit commodo mollis.</p>
                <div class="clearfix">
                    <h6 class="pull-left">Display Errors</h6>
                    <div class="switch pull-right">
                        <input id="setting-3" type="checkbox" checked="">
                        <label for="setting-3" class="switch-success"></label>
                    </div>
                </div>
                <p class="text-muted">Amet per tortor adipiscing risus dolor orci diam curabitur senectus.</p>
                <div class="clearfix">
                    <h6 class="pull-left">Use SEO URLs</h6>
                    <div class="switch pull-right">
                        <input id="setting-4" type="checkbox" checked="">
                        <label for="setting-4" class="switch-success"></label>
                    </div>
                </div>
                <p class="text-muted">Ullamcorper dignissim facilisis fames proin a leo diam amet urna.</p>
                <div class="clearfix">
                    <h6 class="pull-left">Enable History</h6>
                    <div class="switch pull-right">
                        <input id="setting-5" type="checkbox" checked="">
                        <label for="setting-5" class="switch-success"></label>
                    </div>
                </div>
                <p class="text-muted">Consectetur cubilia varius vulputate fermentum non dolor cubilia torquent risus.</p>
            </form>
        </div>
    </div>
</aside>
<aside class="conversation closed">
    <h5 class="text-center m-0 p-20">Edward Garcia<a href="javascript:;" class="conversation-toggle pull-left"><i class="ti-arrow-left text-muted"></i></a><a href="javascript:;" class="pull-right"><i class="ti-pencil text-muted"></i></a></h5>
    <ul data-mcs-theme="minimal-dark" class="media-list chat-content fs-12 pl-20 pr-20 mCustomScrollbar">
        <li class="media">
            <div class="media-left avatar"><img src="/img/template/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
            <div class="media-body">
                <p>Hello.</p>
                <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted">09:45 PM <i class="ti-check text-success"></i></time>
            </div>
        </li>
        <li class="media other">
            <div class="media-body">
                <p>Hi.</p>
                <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted pull-right">09:46 PM <i class="ti-check text-success"></i></time>
            </div>
            <div class="media-right avatar"><img src="/img/template/users/18.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
        </li>
        <li class="media">
            <div class="media-left avatar"><img src="/img/template/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
            <div class="media-body">
                <p>How are you?</p>
                <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted">09:47 PM <i class="ti-check text-success"></i></time>
            </div>
        </li>
        <li class="media other">
            <div class="media-body">
                <p>I'm good. How are you?</p>
                <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted pull-right">09:50 PM <i class="ti-check text-success"></i></time>
            </div>
            <div class="media-right avatar"><img src="/img/template/users/18.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
        </li>
        <li class="media">
            <div class="media-left avatar"><img src="/img/template/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
            <div class="media-body">
                <p>Good. Do you speak English?</p>
                <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted">09:55 PM <i class="ti-check text-success"></i></time>
            </div>
        </li>
        <li class="media other">
            <div class="media-body">
                <p>A little. Are you American?</p>
                <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted pull-right">09:56 PM <i class="ti-check text-success"></i></time>
            </div>
            <div class="media-right avatar"><img src="/img/template/users/18.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
        </li>
        <li class="media">
            <div class="media-left avatar"><img src="/img/template/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
            <div class="media-body">
                <p>Yes.</p>
                <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted">10:00 PM <i class="ti-check text-success"></i></time>
            </div>
        </li>
        <li class="media other">
            <div class="media-body">
                <p>Where are you from?</p>
                <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted pull-right">10:01 PM <i class="ti-check text-success"></i></time>
            </div>
            <div class="media-right avatar"><img src="/img/template/users/18.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
        </li>
        <li class="media">
            <div class="media-left avatar"><img src="/img/template/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
            <div class="media-body">
                <p>I'm from California.</p>
                <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted">10:03 PM <i class="ti-check text-success"></i></time>
            </div>
        </li>
        <li class="media other">
            <div class="media-body">
                <p>Nice to meet you.</p>
                <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted pull-right">10:04 PM <i class="ti-check text-success"></i></time>
            </div>
            <div class="media-right avatar"><img src="/img/template/users/18.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
        </li>
        <li class="media">
            <div class="media-left avatar"><img src="/img/template/users/04.jpg" alt="" class="media-object img-circle"><span class="status bg-success"></span></div>
            <div class="media-body">
                <p>Nice to meet you too.</p>
                <time datetime="2015-12-10T20:50:48+07:00" class="fs-11 text-muted">10:05 PM <i class="ti-check text-success"></i></time>
            </div>
        </li>
    </ul>
    <form class="pl-20 pr-20">
        <div class="form-group has-feedback mb-0">
            <input type="text" aria-describedby="inputSendMessage" placeholder="Sent a message" class="form-control rounded"><span aria-hidden="true" class="ti-pencil-alt form-control-feedback"></span><span id="inputSendMessage" class="sr-only">(default)</span>
        </div>
    </form>
</aside>
<!-- Right Sidebar end-->
<!-- Demo Settings start-->
<div class="setting closed"><a href="javascript:;" class="setting-toggle fs-16"><i class="ti-palette text-muted"></i></a>
    <h5 class="fs-16 mt-0 mb-20">Header Colors</h5>
    <ul class="list-inline">
        <li><a href="javascript:;" data-color="header-primary" class="mo-xs bg-primary inline-block img-circle header-color"></a></li>
        <li><a href="javascript:;" data-color="header-green" class="mo-xs bg-success inline-block img-circle header-color"></a></li>
        <li><a href="javascript:;" data-color="header-purple" class="mo-xs bg-purple inline-block img-circle header-color"></a></li>
        <li><a href="javascript:;" data-color="header-yellow" class="mo-xs bg-warning inline-block img-circle header-color"></a></li>
        <li><a href="javascript:;" data-color="header-red" class="mo-xs bg-danger inline-block img-circle header-color"></a></li>
    </ul>
    <h5 class="fs-16 mt-0 mb-20">Sidebar Style</h5>
    <ul class="list-inline">
        <li><a href="javascript:;" data-color="sidebar-dark" class="sidebar-color mo-xs bg-black inline-block img-circle"></a></li>
        <li><a href="javascript:;" data-color="sidebar-light" class="sidebar-color mo-xs bg-default inline-block img-circle"></a></li>
    </ul>
    <form class="form-horizontal mb-20">
        <div class="clearfix">
            <p class="form-control-static pull-left">Background Image</p>
            <div class="switch pull-right">
                <input id="sidebar-bg" type="checkbox" checked="">
                <label for="sidebar-bg" class="switch-success"></label>
            </div>
        </div>
    </form>
    <ul class="list-inline mb-0">
        <li><a href="javascript:;" data-bg="10.jpg" class="inline-block sidebar-bg"><img src="/img/template/thumbnails/10.jpg" width="60" alt="" class="img-rounded"></a></li>
        <li><a href="javascript:;" data-bg="11.jpg" class="inline-block sidebar-bg"><img src="/img/template/thumbnails/11.jpg" width="60" alt="" class="img-rounded"></a></li>
        <li><a href="javascript:;" data-bg="12.jpg" class="inline-block sidebar-bg"><img src="/img/template/thumbnails/12.jpg" width="60" alt="" class="img-rounded"></a></li>
    </ul>
</div>
<div class="footer">2016 &copy;  <a href="http://themeforest.net/item/umega-responsive-web-app-kit/15482080">Umega - Responsive Web App Kit</a> by <a href="http://themeforest.net/user/lethemes" target="_blank">Lethemes.</a></div>
@stop

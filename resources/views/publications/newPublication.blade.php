@extends('template')

@section('title', 'Nueva Publicación')

@section('modules')

@foreach($modules as $modul)
<li class="panel"><a href="widgets.html"><i class="{{$modul['modIcono']}}"></i><span class="sidebar-title">{{$modul['modDescripcion']}}</span></a></li>
@endforeach
@endsection

@section('content')
<div class="page-header clearfix">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mt-0 mb-5">Nueva publicación</h4>
        </div>
    </div>
</div>
<div class="page-content container-fluid">
    <div class="page-content container-fluid p-0">
        <div class="row row-0 mailbox">
            <div class="widget" id="widget-newPublications">
                <div class="widget-heading">
                    <h3 class="widget-title">Todos los campos son obligatorios</h3>
                </div>
                <div class="widget-body">
                    <form id="formNewPublication">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="textInput">Título</label>
                                    <input id="title" type="text" name="publication[title]" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="textArea">Descripción</label>
                                    <textarea id="description" rows="3" name="publication[description]" class="form-control"></textarea>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row products">
                            <div class="widget widget-products" style=" margin-top:15px;">
                                <div class="widget-heading">
                                    <h3 class="widget-title" id="productsTittle">Producto N° 1</h3>
                                </div>
                                <div class="widget-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-xs-12 col-lg-offset-3 col-md-offset-3">
                                            <div class="form-group">
                                                <label for="selectZones">Zona</label>
                                                <select id="selectZones-1" class=" form-control" name="publication[products][1][zones]" style="width: 100%;">
                                                    <option disabled selected="">Seleccione</option>
                                                    @foreach ($data['zones'] as $zones)
                                                    <option value="{{$zones['zonID']}}">{{$zones['zonDescripcion']}}</option>
                                                    @endforeach
                                                </select>
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-xs-12">
                                            <div class="form-group">
                                                <label for="selectType">Tipo</label>
                                                <select onchange="setSelectCategories(this.value, 1);" id="selectType-1" class=" form-control" name="publication[products][1][type]" style="width: 100%;">
                                                    <option disabled selected="">Seleccione</option>
                                                    @foreach ($data['units'] as $units)
                                                    <option value="{{$units['uniID']}}">{{$units['uniDescripcion']}}</option>
                                                    @endforeach
                                                </select>
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-xs-12">
                                            <div class="form-group">
                                                <label for="selectCategories">Categoria</label>
                                                <select id="selectCategories-1" class=" form-control" name="publication[products][1][categories]" disabled style="width: 100%;">
                                                    <option disabled selected="">Seleccione</option>
                                                </select>
                                                <span class="help-block"></span>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-xs-12">
                                            <div class="form-group">
                                                <label for="textInput">Cantidad</label>
                                                <input id="quantity-1" name="publication[products][1][quantity]" type="text" class="form-control">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-xs-12">
                                            <div class="form-group">
                                                <label for="selectDistribution">Distribución</label>
                                                <select id="selectDistribution-1" class=" form-control" name="publication[products][1][distribution]"  style="width: 100%;">
                                                    <option disabled selected="">Seleccione</option>
                                                    @foreach ($data['distribution'] as $distribution)
                                                    <option value="{{$distribution['disID']}}">{{$distribution['disDescripcion']}}</option>
                                                    @endforeach
                                                </select>
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-xs-12">
                                            <div class="form-group">
                                                <label for="quantityMin">Cantidad minima por compra</label>
                                                <input id="quantityMin-1" type="text" name="publication[products][1][quantityMin]" class="form-control">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-xs-12">
                                            <div class="form-group">
                                                <label for="price">Precio</label>
                                                <input id="price-1" name="publication[products][1][price]" type="text" class="form-control">
                                                <span class="help-block"></span>    
                                            </div>
                                        </div>      
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row ">
                            <a onclick="addProducts();" type="submit" class="btn btn-outline btn-primary  pull-left"><i class="fa fa-plus"></i> Añadir producto</a>
                            <a onclick="storePublication();" type="submit" class="btn btn-outline btn-success  pull-right"><i class="fa fa-save"></i> Crear publicación</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xs-12" hidden id="loading">
                <div class="loading-demo text-center">
                    <div class="sk-double-bounce" style="margin:0 !important;">
                        <div class="sk-child sk-double-bounce1"></div>
                        <div class="sk-child sk-double-bounce2"></div>
                    </div>
                    <h5>&nbsp; Creando publicación, por favor espere...</h5>
                </div>
            </div>    

            <div class="col-xs-12" hidden id="response">
                <div class="row text-center" id="font">
                </div>
                <h4 class="text-center" id="description-message"> </h4>
                <br>
                <div class="row text-center" id="buttons">
                </div>
            </div>         
        </div>
    </div>
</div>

@endsection

@section('specificJS')

<script>

    var products = $(".products").html();

    function addProducts() {
        count = $(".widget-products").length + 1;
        //reemplazamos ID de elementos sumandoles +1 despues del "-"
        addProduct = products.replace('<input value="1" hidden>', "<input value=" + count + ">");
        addProduct = addProduct.replace('Producto N° 1', "Producto N° " + count);
        addProduct = addProduct.replace('this.value, 1', "this.value, " + count);
        addProduct = addProduct.replace('selectZones-1', "selectZones-" + count);
        addProduct = addProduct.replace('selectCategories-1', "selectCategories-" + count);
        addProduct = addProduct.replace('selectType-1', "selectType-" + count);
        addProduct = addProduct.replace('quantity-1', "quantity-" + count);
        addProduct = addProduct.replace('selectDistribution-1', "selectDistribution-" + count);
        addProduct = addProduct.replace('quantityMin-1', "quantityMin-" + count);
        addProduct = addProduct.replace('price-1', "price-" + count);
        addProduct = addProduct.replace("publication[products][1][zones]", 'publication[products][' + count + '][zones]');
        addProduct = addProduct.replace("publication[products][1][type]", 'publication[products][' + count + '][type]');
        addProduct = addProduct.replace("publication[products][1][categories]", 'publication[products][' + count + '][categories]');
        addProduct = addProduct.replace("publication[products][1][quantity]", 'publication[products][' + count + '][quantity]');
        addProduct = addProduct.replace("publication[products][1][distribution]", 'publication[products][' + count + '][distribution]');
        addProduct = addProduct.replace("publication[products][1][quantityMin]", 'publication[products][' + count + '][quantityMin]');
        addProduct = addProduct.replace("publication[products][1][price]", 'publication[products][' + count + '][price]');

        $(".products").append(addProduct);
    }

    function setSelectCategories(uniID, divID)
    {
        $.ajax({
            url: '/getCategories',
            type: 'GET',
            dataType: 'JSON',
            data: {
                uniID: uniID,
            },
            success: function (data) {
                var select = "<option disabled selected>Seleccione</option>";
                $.each(data, function (i, getdata) {
                    select += "<option value='" + getdata.cunID + "'>" + getdata.categorias.catDescripcion + "</option>";
                });

                $("#selectCategories-" + divID).removeAttr('disabled');
                $("#selectCategories-" + divID).html(select);
            }
        });
    }

    function storePublication()
    {

        $('.form-group').removeClass('has-error');
        $('.select2-selection__rendered').removeClass('select2Error');
        $('.form-group').children('.help-block').html('');

        title = $("#title").val();
        description = $("#description").val();

        if (estaVacio(title)) {
            $('#title').parent().addClass('has-error');
            $('#title').parent().children('span').html('Debe ingresar un título.');
            return
        }

        if (estaVacio(description)) {
            $('#description').parent().addClass('has-error');
            $('#description').parent().children('span').html('Debe ingresar una descripción.');
            return
        }

        for (var i = 1; i <= $(".widget-products").length; i++) {

            selectZones = $("#selectZones-" + i).val();
            selectType = $("#selectType-" + i).val();
            selectCategories = $("#selectCategories-" + i).val();
            quantity = $("#quantity-" + i).val();
            selectDistribution = $("#selectDistribution-" + i).val();
            quantityMin = $("#quantityMin-" + i).val();
            price = $("#price-" + i).val();

            if (!estaSeleccionado(selectZones)) {
                $('#selectZones-' + i).parent().addClass('has-error');
                $('#selectZones-' + i).parent().children('span').html('Debe ingresar una zona.');
                return
            }

            if (!estaSeleccionado(selectType)) {
                $('#selectType-' + i).parent().addClass('has-error');
                $('#selectType-' + i).parent().children('span').html('Debe ingresar un tipo.');
                return
            }

            if (!estaSeleccionado(selectCategories)) {
                $('#selectCategories-' + i).parent().addClass('has-error');
                $('#selectCategories-' + i).parent().children('span').html('Debe ingresar una categoria.');
                return
            }

            if (estaVacio(quantity)) {
                $('#quantity-' + i).parent().addClass('has-error');
                $('#quantity-' + i).parent().children('span').html('Debe ingresar una cantidad.');
                return
            }

            if (!estaSeleccionado(selectDistribution)) {
                $('#selectDistribution-' + i).parent().addClass('has-error');
                $('#selectDistribution-' + i).parent().children('span').html('Debe ingresar una tipo de distribución.');
                return
            }

            if (!estaSeleccionado(quantityMin)) {
                $('#quantityMin-' + i).parent().addClass('has-error');
                $('#quantityMin-' + i).parent().children('span').html('Debe ingresar una cantidad minima permitida de compra.');
                return
            }

            if (estaVacio(price)) {
                $('#price-' + i).parent().addClass('has-error');
                $('#price-' + i).parent().children('span').html('Debe ingresar una precio.');
                return
            }
        }

        $.ajaxSetup({
            header: $('meta[name="_token"]').attr('content')
        })

        $.ajax({
            url: '/storePublication',
            type: 'POST',
            dataType: 'JSON',
            data: $("#formNewPublication").serialize(),
            beforeSend: function () {
                $("#widget-newPublications").hide();
                $("#loading").show();
            },
            success: function (data) {

                if (data.successfull === true) {
                    font = "<i class='fa fa-check fa-5x' style='color: #4caf50;'></i>";
                    description = data.descripcion;

                } else {
                    font = "<i class='fa fa-times fa-5x' style='color: #f44336;'></i>";
                    description = data.descripcion;
                }

                buttons = '<a href="/createPublications" class="btn btn-outline btn-warning"> Crear otra publicación</a>';
                buttons += '<a href="/home" class="btn btn-outline btn-warning"> Ver listado de publicacion</a>';
                $("#buttons").html(buttons);
                console.log(description);
                $("#font").html(font);

                $("#description-message").html(description);

                $("#loading").hide();
                $("#response").show();

            }
        });
    }

</script>

@endsection

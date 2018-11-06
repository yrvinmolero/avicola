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
                    <div class="col-xs-12">
                    	<div class="form-group">
                      		<label for="textInput">Título</label>
                      		<input id="titulo" type="text" name="titulo" class="form-control">
                            <span class="help-block"></span>
                    	</div>
                    </div>
                   	<div class="col-xs-12">
	                    <div class="form-group">
	                      <label for="textArea">Descripción</label>
	                      <textarea id="descripcion" rows="3" name="descripcion" class="form-control"></textarea>
                          <span class="help-block"></span>
	                    </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-xs-12">
                            <div class="form-group">
                               <label for="selectZones">Zona</label>
                                <select id="selectZones" class=" form-control" name="selectZones" style="width: 100%;">
                                    <option disabled selected="">Seleccione</option>
                                    @foreach ($data['zones'] as $zones)
                                        <option value="{{$zones['zonID']}}">{{$zones['zonDescripcion']}}</option>
                                    @endforeach
                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-xs-12">
                            <div class="form-group">
                                <label for="pozMinima">Cantidad minima por compra</label>
                                <input id="pozMinima" type="text" name="pozMinima" class="form-control">
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-xs-12">
    	                    <div class="form-group">
    	                       <label for="selectUnits">Tipo</label>
                            	<select onchange="setSelectCategories(this.value);" id="selectUnits" class=" form-control" name="units" style="width: 100%;">
    	                            <option disabled selected="">Seleccione</option>
    	                            @foreach ($data['units'] as $units)
    	                                <option value="{{$units['uniID']}}">{{$units['uniDescripcion']}}</option>
    	                            @endforeach
                            	</select>
                                <span class="help-block"></span>
    	                    </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12">
    	                    <div class="form-group">
    	                       <label for="selectCategories">Categoria</label>
                            	<select id="selectCategories" class=" form-control" name="categories" disabled style="width: 100%;">
    	                            <option disabled selected="">Seleccione</option>
                            	</select>
                                <span class="help-block"></span>
    	                    </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label for="textInput">Cantidad</label>
                                <input id="cantidad" name="cantidad" type="text" class="form-control">
                                <span class="help-block"></span>
                            </div>
                        </div>
                    	<div class="col-lg-4 col-md-4 col-xs-12">
    	                    <div class="form-group">
    	                       <label for="selectDistribution">Distribución</label>
                            	<select id="selectDistribution" class=" form-control" name="ditribution"  style="width: 100%;">
    	                            <option disabled selected="">Seleccione</option>
    	                            @foreach ($data['distribution'] as $distribution)
    	                                <option value="{{$distribution['disID']}}">{{$distribution['disDescripcion']}}</option>
    	                            @endforeach
                            	</select>
                                <span class="help-block"></span>
    	                    </div>
                        </div>
                        
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label for="textInput">Precio</label>
                                <input id="precio" name="precio" type="text" class="form-control">
                                <span class="help-block"></span>    
                            </div>
                        </div>      
                    </div>
	                <div class="row">
                        <a onclick="storePublication();" type="submit" class="btn btn-outline btn-success">Crear publicación</a>
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
                     <h4 class="text-center" id="description"> </h4>
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
	function setSelectCategories(uniID)
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
	            	select+= "<option value='" + getdata.categorias.catID + "'>"+getdata.categorias.catDescripcion+"</option>"; 
	            });

	          $("#selectCategories").removeAttr('disabled');
	          $("#selectCategories").html(select);
			}
		});	
	}

    function storePublication()
    {
        titulo = $("#titulo").val();
        descripcion = $("#descripcion").val();
        zona = $("#selectZones").val();
        unidad = $("#selectUnits").val();
        categorias = $("#selectCategories").val();
        cantidad = $("#cantidad").val();
        distribution = $("#selectDistribution").val();
        precio = $("#precio").val();
        pozMinima = $("#pozMinima").val();
        
        $('.form-group').removeClass('has-error');
        $('.select2-selection__rendered').removeClass('select2Error');
        $('.form-group').children('.help-block').html('');

        if(estaVacio(titulo)){
            $('#titulo').parent().addClass('has-error');
            $('#titulo').parent().children('span').html('Debe ingresar un título.');
            return
        }
        
        if(estaVacio(descripcion)){
            $('#descripcion').parent().addClass('has-error');
            $('#descripcion').parent().children('span').html('Debe ingresar una descripción.');
            return
        }

        if(!estaSeleccionado(zona)){
            $('#selectZones').parent().addClass('has-error');
            $('#selectZones').parent().children('span').html('Debe ingresar una zona.');
            return
        }

        if(!estaSeleccionado(pozMinima)){
            $('#pozMinima').parent().addClass('has-error');
            $('#pozMinima').parent().children('span').html('Debe ingresar una cantidad minima permitida de compra.');
            return
        }

        if(!estaSeleccionado(unidad)){
            $('#selectUnits').parent().addClass('has-error');
            $('#selectUnits').parent().children('span').html('Debe ingresar un tipo.');
            return
        }

        if(!estaSeleccionado(categorias)){
            $('#selectCategories').parent().addClass('has-error');
            $('#selectCategories').parent().children('span').html('Debe ingresar una categoria.');
            return
        }

        if(estaVacio(cantidad)){
            $('#cantidad').parent().addClass('has-error');
            $('#cantidad').parent().children('span').html('Debe ingresar una cantidad.');
            return
        }

        if(!estaSeleccionado(distribution)){
            $('#distribution').parent().addClass('has-error');
            $('#distribution').parent().children('span').html('Debe ingresar una tipo de distribución.');
            return
        }

        if(estaVacio(precio)){
            $('#precio').parent().addClass('has-error');
            $('#precio').parent().children('span').html('Debe ingresar una precio.');
            return
        }

        $.ajaxSetup({
            header:$('meta[name="_token"]').attr('content')
        })

        $.ajax({
            url: '/storePublication',
            type: 'POST',
            dataType: 'JSON',
            data: $("#formNewPublication").serialize(),
            beforeSend: function (){
                $("#widget-newPublications").hide();
                $("#loading").show();
            },
            success: function (data) {
                console.log(data);
                if(data.sucessful === true){
                    font = "<i class='fa fa-check fa-5x' style='color: #4caf50;'></i>" ;
                    description = data.descripcion;

                }else{
                    font = "<i class='fa fa-times fa-5x' style='color: #f44336;'></i>" ;
                    description = data.descripcion;
                }  

                buttons =  '<a href="/createPublications" class="btn btn-outline btn-warning"> Crear otra publicación</a>';
                buttons += '<a href="/home" class="btn btn-outline btn-warning"> Ver listado de publicacion</a>';
                $("#buttons").html(buttons);

                $("#font").html(font);
                $("#description").html(description);

                $("#loading").hide();
                $("#response").show();

            }
        }); 
    }

</script>
	
@endsection

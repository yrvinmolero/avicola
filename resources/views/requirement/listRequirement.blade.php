@extends('template')

@section('title', 'Listado de necesidades')

@section('content')
<div class="page-header clearfix">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mt-0 mb-5">Listado de necesidades</h4>
        </div>
    </div>
</div>
<div class="page-content container-fluid">
    <div class="page-content container-fluid p-0">
        <div class="row row-0 mailbox">
            <table id="product-list" style="width: 100%" class="table table-hover dt-responsive nowrap">
                <thead>
                  <tr>
                    <th>Titulo</th>
                    <th>Descripcion</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Creación</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($requirement as $req)
                    <tr>
                        <td>{{$req['necTitulo']}}</td>
                        <td>{{$req['necDescripcion']}}</td>
                        <td>{{$req['usuarios']['nombre']}}</td>
                        <td>{{$req['usuarios']['correo']}}</td>
                        <td>{{$req['usuarios']['telefono']}}</td>
                        <td>{{$req['created_at']}}</td>
                        <td class="text-center">
                          <div role="group" aria-label="Basic example" class="btn-group btn-group-sm">
                            <a  data-toggle="modal" data-target=".bs-example-modal-lg" type="button" class="btn btn-outline btn-primary" onclick="getProducts({{$req['necID']}})"><i class="ti-eye"></i></a>
                            <a class="btn btn-outline btn-success">Postularme</a>
                          </div>
                        </td>
                     </tr>
                    @endforeach
                </tbody>
              </table>
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

@endsection

@section('specificJS')

  <script>
    function getProducts(id){
        $.ajax({
            url: '/getProductsRequirement',
            type: 'GET',
            dataType: 'JSON',
            data: {
              id:id
            },
            success: function (data) {
            
            }
        });
    }
  </script>
@endsection

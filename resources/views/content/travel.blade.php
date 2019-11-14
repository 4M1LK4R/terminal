@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <h2 class="card-title text-success">Recorridos</h2>
                    </div>          
                    <div class="col-sm-6 d-flex justify-content-end">
                        <button class="btn btn-outline-success" id="btn-agregar">
                            <i class="icon-plus"></i>&nbsp;Agregar
                        </button>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-sm-12" id="msg-global">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="table" class="table table-striped ">
                        <thead>
                            <tr>
                                <td>Registrado por</td>
                                <td>Bus</td>
                                <td>Origen</td>
                                <td>Destino</td>
                                <td>Detalle</td>
                                <td>Salida</td>
                                <td>Llegada</td>
                                <td>Estado</td>
                                <td>Editar</td>
                                <td>Eliminar</td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modals-->
<!-- Modal Datos -->

<div class="modal fade bd-example-modal-lg" id="modal_datos" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title-modal"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-data" id="form-data" novalidate>
                <div class="modal-body">
                        <div class="modal-body">
                            <div class="md-form mb-3" id="select_tipo"></div>
                            <div class="md-form mb-3">
                                <label><b>Detalle:</b></label>
                                <textarea  type="text" class="form-control"  rows="4" id="detalle" name="detalle" placeholder="Detalle" required></textarea>
                                <div class="invalid-feedback">
                                    Dato necesario.
                                </div>
                            </div>
                            <div class="md-form mb-3" id="select_origen"></div>
                            <div class="md-form mb-3" id="select_llegada"></div>

                            <div class="md-form mb-3">
                                <label for="expiration-date">Fecha de Salida:</label>
                                <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                                    <input type="text" id="salida" name="salida" class="form-control datetimepicker-input" data-target="#datetimepicker1" required/>
                                    <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="icon-calendar"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="md-form mb-3">
                                <label for="entry-date">Fecha de Llegada:</label>
                                <div class="input-group date" id="datetimepicker2" data-target-input="nearest">
                                    <input type="text" id="llegada" name="llegada" class="form-control datetimepicker-input" data-target="#datetimepicker2" required/>
                                    <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="icon-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                                                                                                         
                            <div class="md-form mb-3">
                                    <label for="estado"><b>Estado:</b></label>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="estado_activo" name="estado" class="custom-control-input bg-danger"
                                        value="ACTIVO" checked>
                                    <label class="custom-control-label" for="estado_activo">Activo</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="estado_inactivo" name="estado" class="custom-control-input"
                                        value="INACTIVO">
                                    <label class="custom-control-label" for="estado_inactivo">Inactivo</label>
                                </div>
                            </div>

                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar<i class="icon-cancel"></i></button>
                    <button class="btn btn-success" type="submit">Aceptar<i class="icon-ok"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Eliminar -->
<div class="modal fade bd-example-modal-lg" id="modal_eliminar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Eliminar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <h2>¿Está seguro que desea eliminar el registro?</h2>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal">Cancelar<i class="icon-cancel"></i></button>
                <button class="btn btn-success" id="btn_delete">Aceptar<i class="icon-ok"></i></button>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script>
    var user_id={{ Auth::user()->id }};
</script>
<script src="{{ URL::asset('js/scripts/travel.js') }}"></script>
@endsection
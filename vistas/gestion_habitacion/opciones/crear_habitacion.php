<div class="container-fluid">
    <div class="col-md-2"></div>
    <ol class="breadcrumb">
        <li><a href="./">Inicio</a></li>
        <li><a class="ajax-request" href="/gestion_habitacion/gestion_habitaciones.php">Habitaciones</a></li>
        <li><a class="ajax-request" href="/gestion_habitacion/opciones/crear_habitacion.php">Crear Habitacion</a></li>
    </ol>
</div>
<div class="container-fluid spark-screen">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading text-center"><strong>Datos del Habitacion</strong></div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <form method="post" action="" id="formulario_crear_habitacion">
                            <div class="col-sm-12">
                                <label class='control-sidebar-subheading'><strong>Codigo</strong></label>
                                <input type="number" name="id" id="id" min="1"  required maxlength="255" class="form-control"/>
                            </div>
                            <div class="col-sm-12">
                                <label class='control-sidebar-subheading'><strong>Piso</strong></label>
                                <input type="text" name="piso" id="piso" required maxlength="255" class="form-control"/>
                            </div>
                            <div class="col-sm-12">
                                <label class='control-sidebar-subheading'><strong>Tipo de Habitacion</strong></label>
                                <select name="tipo_habitacion_id_fk" id="tipo_habitacion_id_fñk" class="form-control datepicker">
                                    <option value="1">Premium</option>
                                    <option value="2">Ejecutivo</option>
                                    <option value="2">Verduras</option>
                                </select>
                            </div>

                            <input type="hidden" name="estado" value="1"  >
                            <input type="hidden" name="instrucciones" value="habitacion 1">

                            <div class="col-sm-12">
                                <br>
                                <input type="submit" class="btn btn-primary" value="Enviar" disabled/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('input[type="submit"]').removeAttr('disabled');
    });
    $(formulario_crear_habitacion).submit(function (event) {
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: 'probando.php',
            data: $("#formulario_crear_habitacion").serializeArray(),
            dataType: 'html',
            success: function (data) {
                console.log(data);
                if (data == "Ok") {
                    alertify.alert("Funciona");
                } else {
                    alertify.alert("No Funciona");
                }

                $('input[type="submit"]').attr("disabled", "true");
            },
            error: function (data) {
                $('input[type="submit"]').removeAttr('disabled');
                console.log(data);
            }
        });
    });
</script>
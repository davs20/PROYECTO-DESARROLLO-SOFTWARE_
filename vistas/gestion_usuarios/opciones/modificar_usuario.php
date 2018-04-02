<?php
include "../../../controladores/CUD.php";
$R = new CUD();
$fila = $R->seleccionarId();
?>
<div class="container-fluid">
    <div class="col-md-2"></div>
    <ol class="breadcrumb">
        <li><a href="..">Inicio</a></li>
        <li><a class="ajax-request" href="/gestion_usuarios/gestion_usuario.php">Usuarios</a></li>
        <li><a class="active" href="#">Consulta Usuario</a></li>
    </ol>
</div>
<div class="col-md-3"></div>
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">Consultar Usuario</div>
        <div class="panel-body">
            <div class="col-md-12">
                <form method="post" action="" id="formulario_crear_precio">
                    <div class="col-sm-12">
                        <label class='control-sidebar-subheading' for="fecha"><strong>Identidad</strong></label>
                        <input type="text" name="id" id="id"
                               class="form-control" value="<?php echo $fila[0] ?>"/>
                    </div>
                    <div class="col-md-12">
                        <label class='control-sidebar-subheading' for="fecha"><strong>Nombre</strong></label>
                        <input type="text" name="nombre" id="nombre" required maxlength="255" class="form-control"
                               value="<?php echo $fila[1] ?>"/>
                    </div>
                    <div class="col-md-12">
                        <label class='control-sidebar-subheading' for="fecha"><strong>Apellido</strong></label>
                        <input type="text" name="apellido" id="apellido" required maxlength="255" class="form-control"
                               value="<?php echo $fila[2] ?>"/>
                    </div>
                    <div class="col-md-12">
                        <label class='control-sidebar-subheading' for="fecha"><strong>Tipo de usuario</strong></label>
                        <input type="number" name="tipo_usuario" id="tipo_usuario" required maxlength="255"
                               class="form-control" readonly value="1"/>
                    </div>
                    <div class="col-sm-12">
                        <label class='control-sidebar-subheading' for="fecha"><strong>Telefono</strong></label>
                        <input type="text" name="telefono" id="telefono" required step="any"
                               class="form-control" value="<?php echo $fila[4] ?>"/>
                    </div>
                    <div class="col-sm-12">
                        <label class='control-sidebar-subheading' for="fecha"><strong>Contraseña</strong></label>
                        <input type="password" name="password" id="password"
                               class="form-control" value="<?php echo $fila[5] ?>"/>
                    </div>
                    <input type="hidden" name="instrucciones" value="usuario 3">

                    <div class="col-sm-12">
                        <br>
                        <input type="submit" class="btn btn-primary" value="Enviar" disabled/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(formulario_editar).ready(function () {
        $('input[type="submit"]').removeAttr('disabled');
    });
    $(formulario_editar).submit(function (event) {
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: './controlador/impuesto/impuestoactualizar.php',
            data: $("#formulario_editar").serialize(),
            dataType: 'html',
            success: function (data) {
                alert("Si Funciona");
                $('input[type="submit"]').removeAttr('disabled');
            },
            error: function (data) {
                $('input[type="submit"]').removeAttr('disabled');
                console.log(data);
            }
        });
    });
</script>

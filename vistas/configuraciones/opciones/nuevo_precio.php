<div class="container-fluid">
    <div class="col-md-2"></div>
    <ol class="breadcrumb">
        <li><a href="..">Inicio</a></li>
        <li><a class="ajax-request" href="/configuraciones/precio_habitaciones.php">Configuraciones</a></li>
        <li><a class="active" href="#">Nuevo Precio</a></li>
    </ol>
</div>
<div class="col-md-3"></div>
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">Crear Precio de Habitaciones</div>
        <div class="panel-body">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <form method="post" action="" id="formulario_crear_precio">
                    <div class="col-sm-12">
                        <label class='control-sidebar-subheading' for="fecha">Descripcion</label>
                        <input type="text" name="descripcion" id="descripcion" required maxlength="255" class="form-control"/>
                    </div>

                    <div class="col-sm-12">
                        <label class='control-sidebar-subheading' for="fecha">Precio</label>
                        <div class="input-group">
                            <span class="input-group-addon">Lps</span>
                            <input type="number" name="precio" id="precio" required step="any"
                                   class="form-control"/>
                            <span class="input-group-addon">.00</span>
                        </div>
                    </div>
                    <input type="hidden" name="instrucciones" value="tipo_habitacion 1">

                    <div class="col-sm-12">
                        <br>
                        <input type="submit" class="btn btn-primary" value="Enviar" disabled/>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('input[type="submit"]').removeAttr('disabled');
        });
        $(formulario_crear_precio).submit(function (event) {
            event.preventDefault();
            $.ajax({
                type: "POST",
                url: 'probando.php',
                data: $("#formulario_crear_precio").serializeArray(),
                dataType: 'html',
                success: function (data) {
                    console.log(data);
                    alert("SI FUNCIONA");
                    $('input[type="submit"]').attr("disabled", "true");
                },
                error: function (data) {
                    $('input[type="submit"]').removeAttr('disabled');
                    console.log(data);
                }
            });
        });
    </script>
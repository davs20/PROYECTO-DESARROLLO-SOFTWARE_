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
                        <input type="text" name="nombre" id="nombre" required maxlength="255" class="form-control"/>
                    </div>

                    <div class="col-sm-12">
                        <label class='control-sidebar-subheading' for="fecha">Precio</label>
                        <div class="input-group">
                            <span class="input-group-addon">Lps</span>
                            <input type="number" name="porcentaje" id="precio" required step="any"
                                   class="form-control"/>
                            <span class="input-group-addon">.00</span>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <br>
                        <input type="submit" class="btn btn-primary" value="Enviar" disabled/>
                    </div>
                </form>
            </div>
        </div>
    </div>
<div class="container-fluid">
    <div class="col-md-2"></div>
    <ol class="breadcrumb">
        <li><a href="..">Inicio</a></li>
        <li><a class="ajax-request" href="/configuraciones/precio_habitaciones.php">Configuraciones</a></li>
        <li><a class="active" href="#">Consultar Precio</a></li>
    </ol>
</div>
<div class="col-md-3"></div>
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">Consultarr precio Habitaciones</div>
        <div class="panel-body">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <form method="post" action="" id="formulario_crear_precio">
                    <div class="col-sm-12">
                        <label class='control-sidebar-subheading' for="fecha">Id</label>
                        <input type="number" name="id" id="nombre" required maxlength="255" class="form-control" disabled value="1"/>
                    </div>
                    <div class="col-sm-12">
                        <label class='control-sidebar-subheading' for="fecha">Descripcion</label>
                        <input type="text" name="descripcion" id="nombre" required maxlength="255" class="form-control" disabled value="Valor temporal"/>
                    </div>

                    <div class="col-sm-12">
                        <label class='control-sidebar-subheading' for="fecha">Precio</label>
                        <div class="input-group">
                            <span class="input-group-addon">Lps</span>
                            <input type="number" name="porcentaje" id="precio" required step="any"
                                   class="form-control" value="100" disabled/>
                            <span class="input-group-addon">.00</span>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <br>
                        <input type="submit" class="btn btn-flat btn-default" value="Cancelar" />
                        <input type="submit" class="btn btn-flat btn-success" value="Aceptar" />
                    </div>
                </form>
            </div>
        </div>
    </div>

<div class="container-fluid">
    <div class="col-md-2"></div>
    <ol class="breadcrumb">
        <li><a href="./">Inicio</a></li>
        <li><a class="active" href="/gestion_usuarios/gestion_usuario.php">Usuarios</a></li>
    </ol>
</div>
<div class="container-fluid spark-screen">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h3 class="page-header">
                <a class="btn btn-primary ajax-request" href="/gestion_usuarios/opciones/crear_usuario.php">
                    <i class="fa fa-plus"></i> Nuevo Usuario
                </a>
            </h3>
        </div>
    </div>
</div>

<div class="container-fluid spark-screen">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Usuarios</div>
                <div class="panel-body">
                    <div class="col-md-12 box-body">
                        <table class="table table-bordered table-striped" id="datos" style="width: 100%">
                            <thead>
                            <tr>
                                <th>Identidad</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Tipo de usuario</th>
                                <th>Telefono</th>
                                <th>Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>0208199801109</th>
                                <th>Orlando</th>
                                <th>Calix</th>
                                <th>Administrador</th>
                                <th>97048432</th>
                                <th>
                                    <a class="btn btn-primary  btn-bitbucket ajax-request"
                                       href="/gestion_usuarios/opciones/modificar_usuario.php">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a class="btn btn-success btn-flat ajax-request"
                                       href="/gestion_usuarios/opciones/consultar_usuario.php">
                                        <i class="fa fa-search"></i>
                                    </a>
                                    <a class="btn btn-danger btn-flat ajax-request"
                                       href="/gestion_usuarios/opciones/eliminar_usuario.php">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </th>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    $(document).ready(function () {
        $('#datos').DataTable();
    });
</script>

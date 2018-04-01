<div class="container-fluid">
    <div class="col-md-2"></div>
    <ol class="breadcrumb">
        <li><a href="./">Inicio</a></li>
        <li><a class="active" href="#">Configuraciones</a></li>
    </ol>
</div>
<div class="container-fluid spark-screen">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h3 class="page-header">
                <a class="btn btn-primary ajax-request" href="/configuraciones/opciones/nuevo_precio.php">
                    <i class="fa fa-plus"></i> Nuevo Precio
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
                <div class="panel-heading">Precios de las habitaciones</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <table class="table table-striped table-condensed" id="datos">
                            <thead>
                            <th>Id</th>
                            <th>Tipo de Habitacion</th>
                            <th>Precio</th>
                            <th>Opciones</th>
                            </thead>
                            <tbody>
                            <tr>
                                <th>1</th>
                                <th>Premiun</th>
                                <th>10000</th>
                                <th>
                                    <a class="btn btn-primary  btn-bitbucket ajax-request"
                                       href="/configuraciones/opciones/editar_precio.php">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a class="btn btn-success btn-flat ajax-request"
                                       href="">
                                        <i class="fa fa-search"></i>
                                    </a>
                                    <a class="btn btn-danger btn-flat ajax-request"
                                       href="">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </th>
                            </tr>
                            <tr>
                                <th>1</th>
                                <th>Premiun</th>
                                <th>10000</th>
                                <th>
                                    <a class="btn btn-primary ajax-request"
                                       href="">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a class="btn btn-success ajax-request"
                                       href="">
                                        <i class="fa fa-search"></i>
                                    </a>
                                    <a class="btn btn-danger ajax-request"
                                       href="">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </th>
                            </tr>
                            <tr>
                                <th>1</th>
                                <th>Premiun</th>
                                <th>10000</th>
                                <th>
                                    <a class="btn btn-primary ajax-request"
                                       href="">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a class="btn btn-success ajax-request"
                                       href="">
                                        <i class="fa fa-search"></i>
                                    </a>
                                    <a class="btn btn-danger ajax-request"
                                       href="">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </th>
                            </tr>
                            <tr>
                                <th>1</th>
                                <th>Premiun</th>
                                <th>10000</th>
                                <th>
                                    <a class="btn btn-primary ajax-request"
                                       href="">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a class="btn btn-success ajax-request"
                                       href="">
                                        <i class="fa fa-search"></i>
                                    </a>
                                    <a class="btn btn-danger ajax-request"
                                       href="">
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

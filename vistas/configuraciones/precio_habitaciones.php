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
                            <?php
                            include "../../controladores/Conexion.php";
                            $conexion = new Conexion();
                            $db = $conexion->obtenerConexion();
                            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $stmt = $db->prepare("SELECT *  FROM tipo_habitacion");
                            $stmt->execute();
                            $fila = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_LAST);
                            do {
                                echo "<tr>";
                                echo "<td>" . $fila[0] . "</td>";
                                echo "<td>" . $fila[1] . "</td>";
                                echo "<td>" . $fila[2] . "</td>";
                                echo '<td>
                  <a class="btn btn-primary ajax-request" href="/configuraciones/opciones/editar_precio.php?id=' . $fila[0] . '">
                  <i class="fa fa-pencil"></i>
                  </a>
                  <a class="btn btn-success ajax-request" href="/configuraciones/opciones/consultar_precio.php?id=' . $fila[0] . '">
                  <i class="fa fa-search"></i>
                  </a>
                  <a class="btn btn-danger ajax-request" href="/configuraciones/opciones/eliminar_precio.php?id=' . $fila[0] . '">
                  <i class="fa fa-trash"></i>
                  </a>
                  </td>';
                                echo "</tr>";
                            } while ($fila = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_PRIOR));
                            ?>
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

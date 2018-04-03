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
                                <th>Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            include "../../controladores/Conexion.php";
                            $conexion = new Conexion();
                            $db = $conexion->obtenerConexion();
                            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $stmt = $db->prepare("SELECT *  FROM usuario");
                            $stmt->execute();
                            $fila = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_LAST);
                            do {
                                echo "<tr>";
                                echo "<td>" . $fila[0] . "</td>";
                                echo "<td>" . $fila[1] . "</td>";
                                echo "<td>" . $fila[2] . "</td>";
                                echo "<td>" . $fila[3] . "</td>";
                                echo '<td>
                  <a class="btn btn-primary ajax-request" href="/gestion_usuarios/opciones/modificar_usuario.php?id=' . $fila[0] . '/usuario' . '">
                  <i class="fa fa-pencil"></i>
                  </a>
                  <a class="btn btn-success ajax-request" href="/gestion_usuarios/opciones/consultar_usuario.php?id=' . $fila[0] . '/usuario' . '">
                  <i class="fa fa-search"></i>
                  </a>
                  <a class="btn btn-danger ajax-rmequest" id="borrar" href="/gestion_usuarios/gestion_usuario.php">
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
<script>
    $( "#borrar" ).click(function() {
        event.preventDefault();
        alert( "Se va a borrar" );
    });
</script>

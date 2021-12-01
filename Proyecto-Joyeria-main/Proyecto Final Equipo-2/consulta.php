<?php include("header.php")?>

<?php include('bd.php')?>
    <div class="contenido">       
    <table>
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                            <th>Edad</th>
                            <th>Producto</th>
                            <th>T.C</th>
                            <th>Fecha de registro</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM ventas" ;
                        $result = mysqli_query($conex, $query);

                        while ($row = mysqli_fetch_array($result)) { ?>
                        <tr>
                            <td><?php echo $row['nombre']; ?></td>
                            <td><?php echo $row['apellido']; ?></td>
                            <td><?php echo $row['telefono']; ?></td>
                            <td><?php echo $row['correo']; ?></td>
                            <td><?php echo $row['edad']; ?></td>
                            <td><?php echo $row['producto']; ?></td>
                            <td><?php echo $row['tipo_venta']; ?></td>
                            <td><?php echo $row['fecha_reg']; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>  
            </div>
        <?php include("footer.php")?>
    </body>
</html>
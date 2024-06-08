<html>
<head>
    <script>
        function confirmar() {
            return confirm('¿Estas seguro de querer eliminar ese dato?');
        }
    </script>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial</title>
</head>
<body>
    <div class="blue-bar">Historial</div>
<marquee behavior="" direction="" class="banner">Cada detalle está pensado para hacer de tu evento una experiencia inolvidable</marquee>
        <div class="menu">
            <a href="costos.html">Costos</a>
            <a href="mss.html">Inicio</a>
            <a href="Galeria.html">Galeria</a>
            <a href="Tematica.html">Tematica</a>
            <a href="Tamaños.html">Tamaños</a>
            <a href="Contacto.html">Contacto</a>
            <a href="utileria.html">Utileria</a>
            <a href="Quienes.html">Quienes</a>
        </div>
    <center>
    <?php
    $buscar=$_POST['busca'];
    ?>

    <div class="formu">
        <form  action="buscar.php" method="POST">
            <input type="text" name="busca" id="" value="<?=$buscar?>"><br><br>
            <button type="submit">Buscar</button>
        </form>
    </div>
        <br><br><br>
        <div class="table">

        <table style="background-color: rgb(124, 121, 121);">
            <tr>
                <th>Ofertas</th>
            </tr>
        </table>
        <table>
            <tr>
                <th>ID</th>
                <th>Contraseña</th>
                <th>Paquete 1</th>
                <th>Paquete 2</th>
                <th>Paquete 3</th>
                <th>Paquete 4</th>
                <th>Total</th>
                <th>Cambios</th>
            </tr>
            <?php
            $cnx = mysqli_connect("localhost", "root", "", "compras");
            $sql= "SELECT `id`, pass, pqt1, pqt2, pqt3, pqt4, tt FROM ofertas where pass like '$buscar' '%' order by pass ASC";
            $rta= mysqli_query($cnx, $sql);
            while($mostrar1 = mysqli_fetch_row($rta)){
                ?>
                <tr>
                    <td><?php echo $mostrar1['0'] ?></td>
                    <td><?php echo $mostrar1['1'] ?></td>
                    <td><?php echo $mostrar1['2'] ?></td>
                    <td><?php echo $mostrar1['3'] ?></td>
                    <td><?php echo $mostrar1['4'] ?></td>
                    <td><?php echo $mostrar1['5'] ?></td>
                    <td><?php echo $mostrar1['6'] ?></td>
                    <td>
                        <a href="sp_eliminar1.php? id=<?php echo $mostrar1['0'] ?>" name="eliminar1" style="color: rgb(255, 0, 0);" onclick='return confirmar()'>Eliminar</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table><br><br>
        <table style="background-color: rgb(124, 121, 121);">
            <tr>
                <th>Costos</th>
            </tr>
        </table>
        <table>
            <tr>
            <th>ID</th>
                <th>Contraseña</th>
                <th>Paquete 1</th>
                <th>Paquete 2</th>
                <th>Paquete 3</th>
                <th>Total</th>
                <th>Cambios</th>
            </tr>
            <?php
            $sql2= "SELECT `id`, pass, pqt1, pqt2, pqt3, tt FROM costos where pass like '$buscar' '%' order by pass ASC";
            $rta2= mysqli_query($cnx, $sql2);
            while($mostrar2 = mysqli_fetch_row($rta2)){
                ?>
                <tr>
                    <td><?php echo $mostrar2['0'] ?></td>
                    <td><?php echo $mostrar2['1'] ?></td>
                    <td><?php echo $mostrar2['2'] ?></td>
                    <td><?php echo $mostrar2['4'] ?></td>
                    <td><?php echo $mostrar2['3'] ?></td>
                    <td><?php echo $mostrar2['5'] ?></td>
                    <td>
                        <a href="sp_eliminar2.php? id=<?php echo $mostrar2['0'] ?>" name="eliminar2" style="color: rgb(255, 0, 0);" onclick='return confirmar()'>Eliminar</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table><br><br>
    </div>
        </center>
    </body>
</html>

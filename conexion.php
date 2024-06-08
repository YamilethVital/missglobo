<?php
$localidad = 'localhost';
$usuario = 'root';
$password = '';
$namebd = 'compras';

$connet = new mysqli($localidad, $usuario, $password, $namebd);
if ($connet->connect_error) {  
    die("Error en la conexión: " . $connet->connect_error);
    }

if (isset($_POST['pqt'])) {
    $pq1 = trim($_POST['total4']);
    $pq2 = trim($_POST['total1']);
    $pq3 = trim($_POST['total2']);
    $pq4 = trim($_POST['total3']);
    $pq5 = trim($_POST['total5']);
    $pq6 = trim($_POST['resulta']);

    $guardar = "INSERT INTO ofertas(pass, pqt1, pqt2, pqt3, pqt4, tt) VALUES ('$pq1','$pq2','$pq3','$pq4','$pq5', '$pq6')";
    $enviar = mysqli_query($connet,$guardar);

    if ($enviar){
        ?>
        <script>
            alert('pedido hecho puedes pasar a recojer');
        </script>
        <?
        include 'ofertas.html';
    } else {
        ?> 
        <script>
            alert("¡Ups ha ocurrido un error!");
        </script>
       <?php
        include 'ofertas.html';
    }
}

if (isset($_POST['pqt1'])) {
    $pq4 = trim($_POST['total4']);
    $pq1 = trim($_POST['total1']);
    $pq2 = trim($_POST['total2']);
    $pq3 = trim($_POST['total3']);
    $tt = trim($_POST['total']);

    $guardar = "INSERT INTO costos(pass, pqt1, pqt2, pqt3, tt) VALUES ('$pq4','$pq1','$pq2','$pq3','$tt')";
    $enviar = mysqli_query($connet,$guardar);
    
    if ($enviar){
        ?>
        <script>
            alert('pedido hecho puedes pasar a recojer');
        </script>
        <?
        include 'costos.html';
    } else {
        ?> 
        <script>
            alert("¡Ups ha ocurrido un error!");
        </script>
       <?php
       include 'costos.html';
    }
}
?>
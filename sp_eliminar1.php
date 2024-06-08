<?php
$id=$_GET['id'];

$cnx = mysqli_connect("localhost", "root", "", "compras");
$sql= "DELETE FROM ofertas WHERE id like $id";
$rta= mysqli_query($cnx, $sql);
if (!$rta) {
    ?>
    <script>
        alert("Error no se a podido eliminar");
    </script>
    <?php
}else{
    ?>
    <script>
        alert("Se a eliminado correcta mente");
    </script>
    <?php
    header("Location: buscar.php");
}
?>
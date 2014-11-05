<?php
$id=$_COOKIE['id'];
$acc=$_COOKIE['estatus'];
$tp=$_COOKIE['Nivel'];
if($id=='' or $acc=='' or $tp=='')
{
    header("location:index.php");
    exit;
}
else
    if($tp!='2')
    {
        echo "Esta pantalla solo puede ser vista por el administrador";
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
    <?php
    require ('base.php');
    $sql0 = "Select * From usuario where id=$id";
    $consulta0 = mysql_query($sql0)or die("Error de consulta 0");
    $Nombre =mysql_result($consulta0,0,'Nombre');
    $APP =mysql_result($consulta0,0,'ApellidoPaterno');
    $APM =mysql_result($consulta0,0,'ApellidoMaterno');
	echo" <table align='center'><tr><td><center><h10><font size='5' color='#black'><b>BIENVENIDO</b></font></h10></center>".
        "<center><h10><font size='5'color='#black'><b>$Nombre $APP $APM</b></font></h10></center></td></tr>";
    ?>
</body>
</html>
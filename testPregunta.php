<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <title>Cuestinario</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="function.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr><td height="5" bgcolor="#464646"></td></tr>
    <tr>
        <td>
            <table width="779" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td valign="top">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="457" valign="top">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td height="107">
                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                    <tr><td class="name">Cuestionario de futbol</td></tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="58" valign="top">
                                                <table border="0" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                        <td width="9"><img src="images/rc1.jpg" alt="Sports" width="9" height="58" /></td>
                                                        <td id="links-bg">
                                                            <table border="0" cellspacing="0" cellpadding="0">
                                                                <tr>
                                                                    <td class="toplinks"><a href="testPregunta.php">Cuestionario</a></td><td class="sap">|</td>
                                                                    <td class="toplinks"><a href="Calificacion.php">Calificacion Mayor</a></td><td class="sap">|</td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td width="322"><img src="images/header.png" alt="Sports" width="322" height="165" /></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr><td height="1" valign="top"></td></tr>
                <tr><td height="20" valign="top"></td></tr>
                <tr><td valign="top"><img src="images/rc2.gif" alt="Sports" width="783" height="13" /></td></tr>
                <tr><div class="inner_copy"></div>
                <td valign="top">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr bgcolor="#F2F2F0">
                            <td width="200" valign="top">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td>
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
require ('Base.php');
$sql0 = "Select * From usuario where id=$id";
$consulta0 = mysql_query($sql0)or die("Error de consulta 0");
$usr =mysql_result($consulta0,0,'usuario');
echo" <table align='right'><tr><td><font size='5'color='#black'>Usuario: $usr</font></td></tr></table>";
require ('Pregunta.php');
require ('Base.php');
$pregunta2 = new pregunta();
$pregunta2->readPregunta();
?>
                                        </td>
                                    </tr>
                                    <tr><td height="10"></td></tr>
                                    <tr>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr><td>&nbsp;</td></tr>
                                </table>
                            </td>

                        </tr>
                        <tr>
                            <td valign="top"><img src="images/rc3.gif" alt="Sports" width="783" height="13" /></td>
                        </tr>
                        <tr>
                            <td height="35" valign="top">
                            </td>
                        </tr>
                    </table>
                </td>
                </tr>
            </table>
</body>
</html>
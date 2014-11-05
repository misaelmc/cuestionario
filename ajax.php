<html>
<head>
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="function.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<?php
require ('Base.php');
require ('Pregunta.php');
$p1=$_REQUEST['r1'];
$p2=$_REQUEST['r2'];
$p3=$_REQUEST['r3'];
$p4=$_REQUEST['r4'];
$p5=$_REQUEST['r5'];
$p6=$_REQUEST['r6'];
$p7=$_REQUEST['r7'];
$p8=$_REQUEST['r8'];
$p9=$_REQUEST['r9'];
$p10=$_REQUEST['r10'];
$r1=$_REQUEST['p1'];
$r2=$_REQUEST['p2'];
$r3=$_REQUEST['p3'];
$r4=$_REQUEST['p4'];
$r5=$_REQUEST['p5'];
$r6=$_REQUEST['p6'];
$r7=$_REQUEST['p7'];
$r8=$_REQUEST['p8'];
$r9=$_REQUEST['p9'];
$r10=$_REQUEST['p10'];
$pregunta2 = new pregunta();
$pregunta2->compPregunta($p1,$r1,$p2,$r2,$p3,$r3,$p4,$r4,$p5,$r5,$p6,$r6,$p7,$r7,$p8,$r8,$p9,$r9,$p10,$r10);
?>
</body>
</html>

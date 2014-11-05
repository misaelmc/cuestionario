<html>
<head>
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="function.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<?php
require('Base.php');
class pregunta
{
    public function readPregunta()
    {
        echo "<form method='post' id='formulario1' role='form'>";
        echo "<table aling='center' width='100%' border='0' cellspacing='0' cellpadding='0'>";
        $rand1=rand(1,3);
        $con=mysql_query("select * from preguntas where id = $rand1 ")or die(mysql_error());
        while($field=mysql_fetch_array($con))
        {
            echo "<input type='text' value='$rand1' name=r1 visible='false' readonly style='visibility:hidden;'>";
            echo "  <tr>";
            echo "      <td colspan='3' class='main-head'>".$this->pr=$field['pregunta'];;
            echo "      </td>";
            echo "  </tr>";
            echo "  <tr>";
            echo "      <td class='leftlinks'><input type='radio' name='p1' value='1'>".$this->r1=$field['respuesta1'];;
            echo "      </td>";
            echo "      <td class='leftlinks'><input type='radio' name='p1' value='2'>".$this->r2=$field['respuesta2'];;
            echo "      </td>";
            echo "      <td class='leftlinks'><input type='radio' name='p1' value='3'>".$this->r3=$field['respuesta3'];;
            echo "      </td>";
            echo "  </tr>";
        }
        $rand2=rand(4,6);
        $con=mysql_query("select * from preguntas where id = $rand2 ")or die(mysql_error());
        while($field=mysql_fetch_array($con))
        {
            echo "<input type='text' value='$rand2' name=r2 visible='false' readonly style='visibility:hidden;'>";
            echo "  <tr>";
            echo "      <td colspan='3' class='main-head'>".$this->pr=$field['pregunta'];;
            echo "      </td>";
            echo "  </tr>";
            echo "  <tr>";
            echo "      <td class='leftlinks'><input type='radio' name='p2' value='1'>".$this->r1=$field['respuesta1'];;
            echo "      </td>";
            echo "      <td class='leftlinks'><input type='radio' name='p2' value='2'>".$this->r2=$field['respuesta2'];;
            echo "      </td>";
            echo "      <td class='leftlinks'><input type='radio' name='p2' value='3'>".$this->r3=$field['respuesta3'];;
            echo "      </td>";
            echo "  </tr>";
        }
        $rand3=rand(7,9);
        $con=mysql_query("select * from preguntas where id = $rand3 ")or die(mysql_error());
        while($field=mysql_fetch_array($con))
        {
            echo "<input type='text' value='$rand3' name=r3 visible='false' readonly style='visibility:hidden;'>";
            echo "  <tr>";
            echo "      <td colspan='3' class='main-head'>".$this->pr=$field['pregunta'];;
            echo "      </td>";
            echo "  </tr>";
            echo "  <tr>";
            echo "      <td class='leftlinks'><input type='radio' name='p3' value='1'>".$this->r1=$field['respuesta1'];;
            echo "      </td>";
            echo "      <td class='leftlinks'><input type='radio' name='p3' value='2'>".$this->r2=$field['respuesta2'];;
            echo "      </td>";
            echo "      <td class='leftlinks'><input type='radio' name='p3' value='3'>".$this->r3=$field['respuesta3'];;
            echo "      </td>";
            echo "  </tr>";
        }
        $rand4=rand(10,12);
        $con=mysql_query("select * from preguntas where id = $rand4 ")or die(mysql_error());
        while($field=mysql_fetch_array($con))
        {
            echo "<input type='text' value='$rand4' name=r4 visible='false' readonly style='visibility:hidden;'>";
            echo "  <tr>";
            echo "      <td colspan='3' class='main-head'>".$this->pr=$field['pregunta'];;
            echo "      </td>";
            echo "  </tr>";
            echo "  <tr>";
            echo "      <td class='leftlinks'><input type='radio' name='p4' value='1'>".$this->r1=$field['respuesta1'];;
            echo "      </td>";
            echo "      <td class='leftlinks'><input type='radio' name='p4' value='2'>".$this->r2=$field['respuesta2'];;
            echo "      </td>";
            echo "      <td class='leftlinks'><input type='radio' name='p4' value='3'>".$this->r3=$field['respuesta3'];;
            echo "      </td>";
            echo "  </tr>";
        }
        $rand5=rand(13,15);
        $con=mysql_query("select * from preguntas where id = $rand5 ")or die(mysql_error());
        while($field=mysql_fetch_array($con))
        {
            echo "<input type='text' value='$rand5' name=r5 visible='false' readonly style='visibility:hidden;'>";
            echo "  <tr>";
            echo "      <td colspan='3' class='main-head'>".$this->pr=$field['pregunta'];;
            echo "      </td>";
            echo "  </tr>";
            echo "  <tr>";
            echo "      <td class='leftlinks'><input type='radio' name='p5' value='1'>".$this->r1=$field['respuesta1'];;
            echo "      </td>";
            echo "      <td class='leftlinks'><input type='radio' name='p5' value='2'>".$this->r2=$field['respuesta2'];;
            echo "      </td>";
            echo "      <td class='leftlinks'><input type='radio' name='p5' value='3'>".$this->r3=$field['respuesta3'];;
            echo "      </td>";
            echo "  </tr>";
        }
        $rand6=rand(16,18);
        $con=mysql_query("select * from preguntas where id = $rand6 ")or die(mysql_error());
        while($field=mysql_fetch_array($con))
        {
            echo "<input type='text' value='$rand6' name=r6 visible='false' readonly style='visibility:hidden;'>";
            echo "  <tr>";
            echo "      <td colspan='3' class='main-head'>".$this->pr=$field['pregunta'];;
            echo "      </td>";
            echo "  </tr>";
            echo "  <tr>";
            echo "      <td class='leftlinks'><input type='radio' name='p6' value='1'>".$this->r1=$field['respuesta1'];;
            echo "      </td>";
            echo "      <td class='leftlinks'><input type='radio' name='p6' value='2'>".$this->r2=$field['respuesta2'];;
            echo "      </td>";
            echo "      <td class='leftlinks'><input type='radio' name='p6' value='3'>".$this->r3=$field['respuesta3'];;
            echo "      </td>";
            echo "  </tr>";
        }
        $rand7=rand(19,21);
        $con=mysql_query("select * from preguntas where id = $rand7 ")or die(mysql_error());
        while($field=mysql_fetch_array($con))
        {
            echo "<input type='text' value='$rand7' name=r7 visible='false' readonly style='visibility:hidden;'>";
            echo "  <tr>";
            echo "      <td colspan='3' class='main-head'>".$this->pr=$field['pregunta'];;
            echo "      </td>";
            echo "  </tr>";
            echo "  <tr>";
            echo "      <td class='leftlinks'><input type='radio' name='p7' value='1'>".$this->r1=$field['respuesta1'];;
            echo "      </td>";
            echo "      <td class='leftlinks'><input type='radio' name='p7' value='2'>".$this->r2=$field['respuesta2'];;
            echo "      </td>";
            echo "      <td class='leftlinks'><input type='radio' name='p7' value='3'>".$this->r3=$field['respuesta3'];;
            echo "      </td>";
            echo "  </tr>";
        }
        $rand8=rand(22,24);
        $con=mysql_query("select * from preguntas where id = $rand8 ")or die(mysql_error());
        while($field=mysql_fetch_array($con))
        {
            echo "<input type='text' value='$rand8' name=r8 visible='false' readonly style='visibility:hidden;'>";
            echo "  <tr>";
            echo "      <td colspan='3' class='main-head'>".$this->pr=$field['pregunta'];;
            echo "      </td>";
            echo "  </tr>";
            echo "  <tr>";
            echo "      <td class='leftlinks'><input type='radio' name='p8' value='1'>".$this->r1=$field['respuesta1'];;
            echo "      </td>";
            echo "      <td class='leftlinks'><input type='radio' name='p8' value='2'>".$this->r2=$field['respuesta2'];;
            echo "      </td>";
            echo "      <td class='leftlinks'><input type='radio' name='p8' value='3'>".$this->r3=$field['respuesta3'];;
            echo "      </td>";
            echo "  </tr>";
        }
        $rand9=rand(25,27);
        $con=mysql_query("select * from preguntas where id = $rand9 ")or die(mysql_error());
        while($field=mysql_fetch_array($con))
        {
            echo "<input type='text' value='$rand9' name=r9 visible='false' readonly style='visibility:hidden;'>";
            echo "  <tr>";
            echo "      <td colspan='3' class='main-head'>".$this->pr=$field['pregunta'];;
            echo "      </td>";
            echo "  </tr>";
            echo "  <tr>";
            echo "      <td class='leftlinks'><input type='radio' name='p9' value='1'>".$this->r1=$field['respuesta1'];;
            echo "      </td>";
            echo "      <td class='leftlinks'><input type='radio' name='p9' value='2'>".$this->r2=$field['respuesta2'];;
            echo "      </td>";
            echo "      <td class='leftlinks'><input type='radio' name='p9' value='3'>".$this->r3=$field['respuesta3'];;
            echo "      </td>";
            echo "  </tr>";
        }
        $rand10=rand(28,30);
        $con=mysql_query("select * from preguntas where id = $rand10 ")or die(mysql_error());
        while($field=mysql_fetch_array($con))
        {
            echo "<input type='text' value='$rand10' name=r10 visible='false' readonly style='visibility:hidden;'>";
            echo "  <tr>";
            echo "      <td colspan='3' class='main-head'>".$this->pr=$field['pregunta'];;
            echo "      </td>";
            echo "  </tr>";
            echo "  <tr>";
            echo "      <td class='leftlinks'><input type='radio' name='p10' value='1'>".$this->r1=$field['respuesta1'];;
            echo "      </td>";
            echo "      <td class='leftlinks'><input type='radio' name='p10' value='2'>".$this->r2=$field['respuesta2'];;
            echo "      </td>";
            echo "      <td class='leftlinks'><input type='radio' name='p10' value='3'>".$this->r3=$field['respuesta3'];;
            echo "      </td>";
            echo "  </tr>";
        }
        echo "<tr>";
        echo "<td>";
        echo "<input onclick=Llamar(); type='button' id='btn-enviar' value='Guardar'>";
        echo "</td>";
        echo "</tr>";
        echo "</table>";
        echo "</form>";
        echo "<div id='resultado1'></div>";
        echo "<div id='datos'></div>";
    }
    public function compPregunta($p1,$r1,$p2,$r2,$p3,$r3,$p4,$r4,$p5,$r5,$p6,$r6,$p7,$r7,$p8,$r8,$p9,$r9,$p10,$r10){
        $band=0;
        $con=mysql_query("select * from preguntas where id = $p1 ")or die(mysql_error());
        while($field=mysql_fetch_array($con))
        {
            $p1=$field['correcta'];
            if($p1 == $r1){
                $band=$band+1;
            }
        }
        $con=mysql_query("select * from preguntas where id = $p2 ")or die(mysql_error());
        while($field=mysql_fetch_array($con))
        {
            $p2=$this->pr=$field['correcta'];
            if($p2==$r2){
                $band=$band+1;
            }
        }
        $con=mysql_query("select * from preguntas where id = $p3 ")or die(mysql_error());
        while($field=mysql_fetch_array($con))
        {
            $p3=$this->pr=$field['correcta'];
            if($p3==$r3){
                $band=$band+1;
            }
        }
        $con=mysql_query("select * from preguntas where id = $p4 ")or die(mysql_error());
        while($field=mysql_fetch_array($con))
        {
            $p4=$this->pr=$field['correcta'];
            if($p4==$r4){
                $band=$band+1;
            }
        }
        $con=mysql_query("select * from preguntas where id = $p5 ")or die(mysql_error());
        while($field=mysql_fetch_array($con))
        {
            $p5=$this->pr=$field['correcta'];
            if($p5==$r5){
                $band=$band+1;
            }
        }
        $con=mysql_query("select * from preguntas where id = $p6 ")or die(mysql_error());
        while($field=mysql_fetch_array($con))
        {
            $p6=$this->pr=$field['correcta'];
            if($p6==$r6){
                $band=$band+1;
            }
        }
        $con=mysql_query("select * from preguntas where id = $p7 ")or die(mysql_error());
        while($field=mysql_fetch_array($con))
        {
            $p7=$this->pr=$field['correcta'];
            if($p7==$r7){
                $band=$band+1;
            }
        }
        $con=mysql_query("select * from preguntas where id = $p8 ")or die(mysql_error());
        while($field=mysql_fetch_array($con))
        {
            $p8=$this->pr=$field['correcta'];
            if($p8==$r8){
                $band=$band+1;
            }
        }
        $con=mysql_query("select * from preguntas where id = $p9 ")or die(mysql_error());
        while($field=mysql_fetch_array($con))
        {
            $p9=$this->pr=$field['correcta'];
            if($p9==$r9){
                $band=$band+1;
            }
        }
        $con=mysql_query("select * from preguntas where id = $p10 ")or die(mysql_error());
        while($field=mysql_fetch_array($con))
        {
            $p10=$this->pr=$field['correcta'];
            if($p10==$r10){
                $band=$band+1;
            }
        }
        $con=mysql_query("select * from preguntas where id = $p10 ")or die(mysql_error());
        while($field=mysql_fetch_array($con))
        {
            $p10=$this->pr=$field['correcta'];
            if($p10==$r10){
                $band=$band+1;
            }
        }
        echo "<table align='center'><tr><td><font size='12'color='#7cfc00' align='center'>Resultado<br><font size='12'color='#7cfc00' align='center'>$band</font></td></tr></table>";
    }

}
?>

</body>
</html>
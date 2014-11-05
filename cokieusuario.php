<?php
 $id=$_GET['Id'];
 if($id=='')
 {
 $msg="NO iniciaste sesion";
 header("location:index.php?msg=$msg");
 exit;
 }
 else
 {
 
  setCookie(id,$id);
  setCookie(usuario);
  setCookie(estatus,1);
  setCookie(Nivel,2);
  header ("location:testPregunta.php?msg=$msg");
  exit;
  }
 ?>
<?php
  //tecnica mvc
  echo "<h2>Resultado</h2>";
  //Receber os dados pelo "nome" de cada um
  //A posição do request é o "name" do campo do formulario
  $b = $_REQUEST['b'];
  $i = $_REQUEST['i'];
  $l = $_REQUEST['l'];
  $s = $_REQUEST['sen'];

  
  if ($s==null) {
      $s=1;
  }else{
    $sen0=sin(deg2rad($s));
  }

  $result = $b*$i*$l*$sen0;
 
  if ($result==1) {
    echo "letra a) <br> ";
  }
  else if ($result==10) {
    echo "letra b) <br> ";
  }
  else if ($result==100) {
    echo "letra c) <br> ";
  }
  else if ($result==1000) {
    echo "letra d) <br> ";
  }
  else if ($result==10000) {
    echo "letra e) <br> ";
  }else{
      echo "algo deu errado, o valor não bate com nenhuma resposta: <br>  a)1,0<br> b)10<br>  c)10^2<br>  d)10^3<br>  e)10^4 <br>";
  }
  
  echo "Fm= ", $result, "N";
 ?>
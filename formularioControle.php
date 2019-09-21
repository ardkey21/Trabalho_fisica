<?php
  //tecnica mvc
  echo "<h2>Resultado</h2>";
  //Receber os dados pelo "nome" de cada um
  //A posição do request é o "name" do campo do formulario
  $q = $_REQUEST['q'];
  $v = $_REQUEST['v'];
  $b = $_REQUEST['b'];
  $s = $_REQUEST['sen'];

  if ($q<0) {
      $qq = $q*-1;
  }else{
      $qq = $q;
  }
  if ($s==null) {
      $s=1;
  }else{
    $sen0=sin(deg2rad($s));
  }
  $result = $qq*$v*$b*$sen0;
 
  if ($result==1) {
    echo "letra a) <br> ";
  }
  else if ($result==10) {
    echo "letra b) <br> ";
    echo "a força magnetica que a terra exerce no fio é de: <br>"
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
      echo "algo deu errado";
  }
  
  echo "Fm= ", $result, "N";
 ?>
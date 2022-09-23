<?php
armstrong_number(9474);

armstrong_number(371);

armstrong_number(10);

armstrong_number(11);

function armstrong_number($Num) {
  $num1 = $Num;
  $total = 0;
  $Mandate = 0;

  while($num1 > 0){
    $Mandate++;
    $num1 = (int)($num1 / 10);
  }

  $num1 = $Num;
  while ($num1 > 0){
    $num2 = $num1 % 10;
    $total = $total + Pow($num2, $Mandate);
    $num1 = (int)($num1/10);
  }
  
  if ($Num == $total){
    echo " True <br>";
  } else {
    echo "False <br>";
  }
}

?>
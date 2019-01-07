<?php
/*   function sum($a = 0, $b = 0) {
    echo $a + $b;
    echo "<br>";
  } */
  /* function sum(&$a = 0, $b = 0) {
    echo $a + $b;
    echo "<br>";
    $a = 100;
  } */
  function sum($a, $b) {
    /* $c = $a + $b;
    return $c; */
  }

  function my_array_keys($arr) {
    $data = [];
    $i = 0;
    if (is_array($arr)) {
      foreach ($arr as $k => $v) {
        $i++;
      }
    }    
    return $i;
  }
?>
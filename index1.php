<?php

  $mas=[
          [1, 2, 0, 5],
          [5, 1, 4, 4],
          [2, 2, 1, 2],
          [2, 2, 1, 2]
      ];




  foreach ($mas as $k1=>$v1){
      foreach ($v1 as $k2=>$v2){
          echo $v2." ";
      }
      echo "<br>";

  }
  echo "<hr>";

  $y=sizeof($mas)-1;

  for ($i=0; $i<sizeof($mas); $i++){
    $mas[$i][$i]=0;
    $mas[$i][$y--]=0;
  }

   foreach ($mas as $k1=>$v1){
        foreach ($v1 as $k2=>$v2){
            echo $v2." ";
        }
        echo "<br>";
    }
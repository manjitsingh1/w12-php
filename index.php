<?php

 /*require_once 'web_page.php';*/

 $product = [
     'id' => 0,
     'name' => 'Black Dress',
     'description' => 'Little Black Evening Dress',
     'price' => 99.99,
 ];

 echo '<table border=1>';
     echo '<tr>';
         echo '<th>index/key</th>';
         echo '<th>value</th>';
         echo '<tr>';

 foreach ($product as $key => $value) {
     echo '<tr>';
     echo '<td>';
     echo "$key <br>";
     echo '</td>';
     echo '<td>';
     echo "$value <br>";
     echo '</td>';
     echo '</tr>';
 }

  echo '</table>';

 ?>
 
 
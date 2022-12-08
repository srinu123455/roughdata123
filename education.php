<?php

if (isset($_POST['submit'])) {
 
  $education = $_POST["education"];
 

        foreach( $education  as $item){
          echo $item. '<br>';
        }

      }




?>
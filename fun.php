 <!DOCTYPE html>
<html>
<body>

<?php 
   function myfun($item)
   {
     return strlen($item);
   }
   $strings = ["apple","mango"];
   $lengths= array_map("myfun", $strings);
    print_r($lengths);
    ?>
    </body>
</html>

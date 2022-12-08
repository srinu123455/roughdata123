<?php
 function fun($num)
 {
 if($num>10){
    throw new exception("hiii");
     }
     return true;
   }
   try{
   fun(1);
   echo "hello"."<br/>";

   }
   catch(exception $e)
   {
     echo $e ->getmessage();
   }
   finally{
   	echo "bye";
   }
   ?>
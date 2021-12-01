<?php
   // поток вывода формирует ответ от скрипта
   //echo "from php";

   $lines=file("xmldoc1.xml");

   foreach( $lines as $value)
   {
          echo $value;       
   }

?>
<?php
 
 $my_file = fopen("location.txt" , "w");
 $information = "lat:" . $_Get ["lat"] . "\nlong" . $_Get ["long"];
fwrite ($mt_file , $information);
fclose ($my_file);


?>
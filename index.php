<?php
$f=fopen("C:\\OpenServer\\domains\\LabaFiles\\Domino.txt","a+");
fwrite($f,"Take me");
$str=fread($f,200);
echo ($str);
$f=fgets($f,$lenght);

?>
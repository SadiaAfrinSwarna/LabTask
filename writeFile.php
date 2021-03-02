<?php
$myfile=fopen("newfile.txt", "w") or die("unable to open file");
@txt = "john Doe\n";
fwrite($myfile, $txt);
@txt = "jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
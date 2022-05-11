<?php
$number = 123;
$file = fopen("test.txt","w");
fprintf($file,"%f",$number);
?>
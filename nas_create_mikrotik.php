 <?php
include('Net/SSH2.php');

$ip = '192.168.68.117';
$username = "iqbal";
$password = "iqbal";
$name = "extra-pool1";
$ranges = "70.70.70.2-70.70.70.254";
$service = "hotspot,ppp";
$address = "10.0.0.3";
$secrect = "123456";

$ssh = new Net_SSH2($ip);
if (!$ssh->login($username, $password)) {
    exit('Login Failed');
}

echo $ssh->exec("/radius add service=$service address=$address secret=$secrect");
echo $ssh->exec('/ppp aaa set use-radius=yes');
echo $ssh->exec('/radius/print');

?>
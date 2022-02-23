
 <?php
include('Net/SSH2.php');

$ip = '192.168.68.117';
$username = "iqbal";
$password = "iqbal";
$queue_name = "P4_Int_UPLOAD_3M";
$kind = "pcq";
$pcq-rate = "3M";
$pcq-classifier = "src-address";
$secrect = "123456";

$ssh = new Net_SSH2($ip);
if (!$ssh->login($username, $password)) {
    exit('Login Failed');
}

echo $ssh->exec("/queue type/add name=$queue_name kind=$kind pcq-rate=$pcq-rate pcq-classifier=$pcq-classifier);
echo $ssh->exec('/queue type/print');

?>
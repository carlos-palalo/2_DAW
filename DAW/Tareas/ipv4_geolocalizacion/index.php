<?php
require_once 'vendor/autoload.php';

use Foolz\Inet\Inet;
use ipinfo\ipinfo\IPinfo;

$num = new Inet();
$client = new IPinfo();

$decimal_ip = $num->ptod("127.0.0.1");
$ip = $num->dtop($decimal_ip);

print($decimal_ip);
print("<br>");
print($ip);

$ip_address = '216.239.36.21';
$details = $client->getDetails($ip_address);

$details->city;
$details->loc;
echo "<pre>";
var_dump($details);
echo "</pre>";

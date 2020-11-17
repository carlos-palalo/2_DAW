<?php
require_once 'vendor/autoload.php';

use Foolz\Inet\Inet;
use ipinfo\ipinfo\IPinfo;

try {
    $num = new Inet();
    $client = new IPinfo();

    echo "  <!DOCTYPE>
        <html>
        <head></head>
        <body>
            <h1>Geolocalización de un número decimal</h1>
            <hr>
            <form action='' method='GET'>
                <p>Introduce el Nº entero:</p>
                <p><input type='number' name='num' placeholder='Número'></p>
                <input name='calcular' type='submit' value='Calcular'></button>
            </form>
        </body>
        </html>";

    if (isset($_REQUEST['calcular'])) {
        $decimal_ip = htmlspecialchars($_REQUEST['num']);
        $dir_ip = $num->dtop($decimal_ip);
        echo "<p>IP Decimal: " . $decimal_ip . "</p>";
        $details = $client->getDetails($dir_ip);
        echo "<p>IP: " . $details->ip . "</p>";
        echo "<p>City: " . $details->city . "</p>";
        echo "<p>Region: " . $details->region . "</p>";
        echo "<p>Country: " . $details->country . "</p>";
        echo "<p>Loc: " . $details->loc . "</p>";
        echo "<p>Postal: " . $details->postal . "</p>";
        echo "<p>Timezone: " . $details->timezone . "</p>";
    }
} catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}

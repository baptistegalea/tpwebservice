<?php

//

//include('Conversion.php');

try {
    $server = new SoapServer(null, array(
        'uri' => 'http://localhost/soap/webservice.php'
    ));
    $server->addFunction('convert');
    $server->handle();
} catch (Exception $e) {
    echo "Exception: " . $e;
}

function convert($data)
{    
	$explode = explode('|', $data);
	if ($explode[0] == $explode[1]){
		return round($explode[2], 2);
	}
	else {
		if ($explode[0] == 1) {
			return round($explode[2] * $explode[1], 2);
		}
		elseif ($explode[1] == 1) {
			return round($explode[2] / $explode[0], 2);
		}
		else {
			return round(($explode[2] / $explode[0]) * $explode[1], 2);
		}
	}
}


<?php

//


try {
    $server = new SoapServer(null, array(
        'uri' => 'http://localhost/soap/webservice.php'
    ));
    $server->addFunction('hello');
    $server->handle();
} catch (Exception $e) {
    echo "Exception: " . $e;
}

function hello($data)
{
    
    
    
    
    
    return $data;
}


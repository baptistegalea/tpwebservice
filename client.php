<<<<<<< .mine
<?php
try{
    $data = $_GET['data'];
    $clientSOAP = new SoapClient(null, array(
        'uri' => 'http://localhost/webservice.php',
        'location' => 'http://localhost/webservice.php',
        'trace' => 1,
        'exceptions' => 0
        )
    );
    
    $ret = $clientSOAP->__call('convert', array($data));
    echo $ret;
    
    
}catch(SoapFault $f)
{
    echo $f;
}

=======
<?php

try{
    $data = $_GET['data'];
    $clientSOAP = new SoapClient(null, array(
        'uri' => 'http://localhost/soap/webservice.php',
        'location' => 'http://localhost/soap/webservice.php',
        'trace' => 1,
        'exceptions' => 0
        )
    );
    
    $ret = $clientSOAP->__call('hello', array($data));
    echo $ret;
    
    
}catch(SoapFault $f)
{
    echo $f;
}
>>>>>>> .theirs

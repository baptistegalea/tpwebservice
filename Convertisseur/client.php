<?php
try{
    $data = $_GET['data'];
    $clientSOAP = new SoapClient(null, array(
        'uri' => 'webservice.php',
        'location' => 'webservice.php',
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

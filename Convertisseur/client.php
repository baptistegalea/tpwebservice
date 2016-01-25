<?php
    try{
        $data = array($_GET['devise1'],
            $_GET['devise2'],
            $_GET['valueToChange']
        );
        $clientSOAP = new SoapClient(null, array(
            'uri' => 'http://localhost/tpwebservice/convertisseur/webservice.php',
            'location' => 'http://localhost/tpwebservice/convertisseur/webservice.php',
            'trace' => 1,
            'exceptions' => 0
            )
        );
        $ret = $clientSOAP->__call('convertisseur',array($data));

        echo $ret;
        
        
    }catch(SoapFault $f)
    {
        echo $f;
    }

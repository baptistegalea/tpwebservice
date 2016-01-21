
<html>
<head>
    <title>SOAP JavaScript Client Test</title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js">
    </script>
</head>

<body>
    <!--
    <FORM>
	    <SELECT name="nom" size="1" onchange="soap(this);">
		    <OPTION>lundi</OPTION>
		    <OPTION>mardi</OPTION>
		    <OPTION>mercredi</OPTION>
		    <OPTION>jeudi</OPTION>
		    <OPTION>vendredi</OPTION>
	    </SELECT>
    </FORM>
    
    
    

    
    -->

    <?php include('loadSelect.php') ?>
    <input type="text" id="valueToChange">
    <input type="submit" name="submit" id="submit" value="Convertir" onclick="soap()">
    <div id='result'>
    
    </div>
    <script>
    function soap() {
        $getValue = document.getElementById('devise1').value + '|' + document.getElementById('devise2').value + '|' + document.getElementById('valueToChange').value; 
        $.ajax({

            url : 'http://localhost/client.php',
            
            //data: 'data= ' + $getValue.value,
            data: 'data=' + $getValue,

            type : 'GET',

            dataType : 'text', // On désire recevoir du HTML

            success : function(code_html, statut){ // code_html contient le HTML renvoyé

                $('#result').text(code_html);

            }

         });

    }

    </script>
</body>

<html>
<head>
    <title>SOAP JavaScript Client Test</title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js">
    </script>
</head>
    <?php include('loadSelect.php') ?>
    <input type="text" id="valueToChange">
    <input type="submit" onclick="soap()">
    <div id='result'>
    
    </div>
    <script>
    function soap() {
        $getValue = document.getElementById('devise1').value + '|' + document.getElementById('devise2').value + '|' + document.getElementById('valueToChange').value; 
        $.ajax({

            url : 'client.php',
            
            //data: 'data= ' + $getValue.value,
            data: 'data=' + $getValue,

            type : 'GET',

            dataType : 'text', // On désire recevoir du HTML

            success : function(code_html, statut){ // code_html contient le HTML renvoyé

                $('#result').text('code_html');

            }

         });

    }

    </script>
</body>
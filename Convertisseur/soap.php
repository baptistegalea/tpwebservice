
<html>
<head>
    <title>SOAP JavaScript Client Test</title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>

</head>
<body>
    <?php include_once ('loadSelect.php') ?>
    <input type="text" id="valueToChange">
    <input class ="btn btn-primary" type="submit" onclick="soap()">
    
    <div id='result'>
    
    </div>
    <script>
    function soap() {
        
        var devise1 = $('#devise1').val();
        var devise2 = $('#devise2').val();
        var valueToChange = $('#valueToChange').val(); 
        $.ajax({

            url : 'client.php',
            
            //data: 'data= ' + $getValue.value,
            data: 'devise1=' + devise1 + '&devise2=' + devise2 + '&valueToChange='+valueToChange,

            type : 'GET',

            dataType : 'text', // On désire recevoir du HTML

            success : function(code_html, statut){ // code_html contient le HTML renvoyé

                $('#result').text(code_html);

            }

         });

    }

    </script>
</body>
</html>
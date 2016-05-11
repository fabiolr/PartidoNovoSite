<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
        html, body
        {
            overflow: hidden;
        }

        html, body, div, iframe {margin:0; padding:0; height:100%}
        iframe {display:block; width:100%; border:none}
    </style>
</head>
<body>
    <iframe src="https://partidonovo.azurewebsites.net/filiacao?<?php echo $_SERVER['QUERY_STRING']; ?>"></iframe>    
</body>
</html>

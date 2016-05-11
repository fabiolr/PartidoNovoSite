<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
        <script src="ckeditor/ckeditor.js"></script>

</head>

<body>
<?php 
$txt = "eventos.txt"; 
$conteudo = file_get_contents($txt);
?>
<script>
    var data = <?php echo json_encode($conteudo); ?>; //Don't forget the extra semicolon!
</script>
        	<form action="criaeventos.php" method="post">
            <textarea name="editor1" id="editor1" rows="80" cols="80">
                ERRO no Editor de HTML
            </textarea>
			<input type="submit" name="submit" value="Gravar">

            <script>
                CKEDITOR.replace( 'editor1' );
				CKEDITOR.instances.editor1.setData(data);

            </script>
        </form>

</body>
</html>
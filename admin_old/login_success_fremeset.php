<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>NOVO | Admin</title>


</head>
<frameset rows="*" cols="190,*" framespacing="0" frameborder="no" border="0">
  <frame src="menu.php" name="leftFrame" scrolling="no" noresize="noresize" id="leftFrame" title="leftFrame" />
  <frame src="welcome.php" name="mainFrame" id="mainFrame" title="mainFrame" />
</frameset>
<noframes><body>
<?php
session_start();
if(!session_is_registered(myusername)){
header("location:index.php");
}
?>

</body></noframes>
</html>

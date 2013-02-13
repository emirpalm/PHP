<?php

session_start();

$_SESSION['usuario'] = "jocarsa";
$_SESSION['contrasena'] = "jocarsa";

echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>Your Page Title</title>
<meta http-equiv="REFRESH" content="0;url=principal.php"></HEAD>
<BODY>
Optional page text here.
</BODY>
</HTML>';

?>

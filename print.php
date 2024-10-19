<?php print( '<?xml version = "1.0" encoding = "utf-8"?>' ) ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!-- Fig. 23.1ed4 or 19.1ed5: first.php -->
<!-- Simple PHP program. -->
<html xmlns = "http://www.w3.org/1999/xhtml">
<?php
	$name = "Harvey";?>
<!-- end PHP script -->
<head>
<title>Using PHP document</title>
</head>
<body style = "font-size: 2em">
<p>
<strong>
<!-- print variable name’s value -->
Welcome to PHP, <?php print( "$name" ); ?>!
</strong>
</p>
</body>
</html>
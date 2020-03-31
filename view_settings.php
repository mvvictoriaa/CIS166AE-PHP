<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>View Your Settings</title>
</head>
<style type="text/css">
body {
	font-size: x-large;
	color: #999;
	}
<?php // Script 9.2 - view_settings.php

// check for a font_size value:
if (isset($_COOKIE['font_size'])) {
	print "\t\tfont-size:" . htmlentities($_COOKIE['font_size']) . ";\n";
	} else {
		print "\t\tfont-size: medium;";
	}

// check for a font_color value:
if (isset($_COOKIE['font_color'])) {
	print "\t\tcolor: #" . htmlentities($_COOKIE['font_color']) . ";\n";
	} else {
		print "\t\tcolor: #000;";
	}
?>
	}
	</style>
</head>
<body>
<p><a href="customize.php">Customize Your Settings</a></p>
<p><a href="reset.php">Reset Your Settings</a></p>

<p>yadda yadda yadda yadda yadda
yadda yadda yadda yadda yadda
yadda yadda yadda yadda yadda
yadda yadda yadda yadda yadda
yadda yadda yadda yadda yadda</p>

</body>
</html>




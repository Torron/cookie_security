<html>
<head>
	<title>votepage</title>
</head>
<?php
if ($_POST[flag]==1)
{
$value = 'redirect';
setcookie("xs", $value, time()+360000, '/');
die();
}
elseif ($_COOKIE['xs']=='redirect')
{
echo "<body bgcolor =#ff0000>\n<h1>YOU VOTED ALREADY</h1>\n</body>";
die();
}
?>
<body>
<p>VOTE HERE<P>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="form">
<!-- Put the rest of your form here
-->
<input type="hidden" name="flag" value="1">
<input type="submit" value="Submit!">
</form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Strings in PHP</title>
</head>
<body>
<form action="index.php"  method="POST">
	<h1>Strings in php</h1>
	<label>Enter your string</label>
	<input type="text" name="str"><br><br>
<input type="submit" name="submit">	<br>
</form>
<?php

if(isset($_POST['submit']))
{
$str=$_POST['str'];
echo "Your string length is :".strlen($str);
echo "<br><br>";
echo "Your string reverse :".strrev($str);
echo "<br><br>";
echo "Remove white space:".trim($str);
echo "<br><br>";
echo "Left trim:".ltrim($str);
echo "<br><br>";
echo "Right trim:".rtrim($str);
echo "<br><br>";
echo "String word count:".str_word_count($str);
echo "<br><br>";
echo "Convert first letter in uppercase:".ucfirst($str);
echo "<br><br>";
echo "Convert first letter in lowercase:".lcfirst($str);
echo "<br><br>";
echo "Your string lower to upper :".strtoupper($str);
echo "<br><br>";
echo "Your string upper to lower :".strtolower($str);
echo "<br><br>";
echo "Your string in hexadecimal value :".bin2hex($str);
echo "<br><br>";
echo "Your string in md5 value :".md5($str);
echo "<br><br>";
echo "Your string in sha1 value :".sha1($str);
}
?>
</body>
</html>

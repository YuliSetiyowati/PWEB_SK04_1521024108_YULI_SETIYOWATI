<html>
<head>
<title>Membuat Segitiga Bintang</title>
</head>
<body>
<?php
for( $a=6;$a>0;$a--)
{
for($b=6;$b>$a;$b--)
{
echo "*";
}
echo"<br>";
}
?>
<?php
for( $a=6;$a>0;$a--)
{
for($b=1; $b<=$a; $b++)
{
echo "&nbsp;&nbsp;";
}
for($c=6;$c>$a;$c--)
{
echo "*";
}
echo "<br>";
}
?>
<?php
for( $a=9;$a>0;$a--)
{
for($b=1; $b<=$a; $b++)
{
echo "&nbsp;";
}
for($c=9;$c>$a;$c--)
{
echo "*";
}
echo "<br>";
}
?>
</body>
</html>


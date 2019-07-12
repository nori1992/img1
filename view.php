<html>
<head>
<title> consql </title>
</head>
<body>
<div style="direction:rtl;">
<center>
<?php
$con=mysqli_connect("localhost","nori","","test");
if (mysqli_connect_errno())
	{echo "errore".mysqli_connect_error();}

$sql="select * from img";
$rus=mysqli_query($con,$sql);
while ($row=mysqli_fetch_array($rus))
{
echo "<img src=img/".$row["photo"].' height="300" width="250">';
echo "<br>";
echo "الإسم :".$row["nom"];
echo "<br>------------------------------------------------";
echo "<br>";
}
mysqli_close($con);
?>
</center>
</div>
</body>
</html>
 
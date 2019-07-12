<html>
<head>
<title> consql </title>
</head>
<body>
<?php
$target="img/";
$target=$target.basename($_FILES['pp']['name']); 

$nom=$_POST['nom'];
$img=($_FILES['pp']['name']);

mysql_connect("127.0.0.1:3306","","") or die (mysql_error());
mysql_select_db("nori") or die(mysql_error());

mysql_query("insert into img (nom,photo) values ('$nom','$img')");

if (move_uploaded_file($_FILES['pp']['tmp_name'],$target))
{
echo "تمت  الإضافة بنجاح";
echo "<a href='index.php'>العودة إلى الرئسية</a>";
}
else {
echo "هناك مشكلة";
}
?>
</body>
</html>

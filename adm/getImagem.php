<?php
$Imagem=$_GET["PicNum"];
$conexao=mysqli_connect("localhost","root","","tcc",3306);
$sqlimage  = "SELECT image FROM userdetail where `id` = $id1";
$imageresult1 = mysql_query($sqlimage);

while($rows=mysql_fetch_assoc($imageresult1))
{
    $image = $rows['image'];
    echo "<img src='$image' >";
    echo "<br>";
} 
?>
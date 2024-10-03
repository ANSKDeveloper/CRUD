<?php

include("conn.php");

/* to get id from url link */
$abc = $_GET["id"];


$mys = "delete from add_student where id = '$abc'";
mysqli_query($con,$mys);

echo "<script>alert('Data Delete !')</script>";
header("Refresh:0;url=display.php");


?>
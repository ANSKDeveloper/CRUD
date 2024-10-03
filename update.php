<?php
    include("conn.php");
    $a = $_GET['id'];

    if(isset($_POST['save'])){

        $name = $_POST['name'];
        $cls = $_POST['class_name'];
        $roll = $_POST['roll_no'];

        $myq = "update add_student set name = '$name',cls = '$cls',roll = '$roll' where id = '$a'";

        mysqli_query($con,$myq);
        header("location:display.php");

    }
?>
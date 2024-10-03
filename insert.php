<?php
    
    include("conn.php");

    if(isset($_POST['save'])){

       $name = $_POST["name"];
       $cls = $_POST["class_name"];
       $roll = $_POST["roll_no"];


        $mys = "insert into add_student(name,cls,roll) values('$name','$cls','$roll')";

        mysqli_query($con,$mys);

        echo "<script>alert('Data Inserted !')</script>";
        header("Refresh:0;url=display.php");


    }


?>
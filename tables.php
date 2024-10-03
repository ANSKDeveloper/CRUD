<?php
 include("conn.php");

 $myq = "select * from add_student";
 $result = mysqli_query($con,$myq);


?>
<div class="container mt-5 mb-5">
    <h1 class="text-center">All Student Records</h1>
    <a href="index.php" class="btn btn-primary">Add new record</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Full Name</th>
                <th scope="col">Class</th>
                <th scope="col">Roll No</th>
                <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>
             <?php
             
                while($mera_data =  mysqli_fetch_array($result)){

             
             ?>

            <tr>
                <th scope="row"><?php echo $mera_data[0]; ?></th>
                <td> <?php echo $mera_data[1]; ?> </td>
                <td><?php echo $mera_data[2]; ?></td>
                <td><?php echo $mera_data[3]; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $mera_data[0]; ?>" class="btn btn-success">Edit</a>
                    <a href="delete.php?id=<?php echo $mera_data[0]; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

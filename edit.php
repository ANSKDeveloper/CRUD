<?php
    include("header.html");
    include("conn.php");

    $a = $_GET['id'];

   $myq =  "select * from add_student where id = '$a'";
   $mera_data = mysqli_query($con,$myq);

   $ekdata = mysqli_fetch_array($mera_data); 



?>
<div class="container mt-5 mb-5">
    <h1 class="text-center">Edit Student</h1>
    <form method="POST" action="update.php?id=<?php echo $ekdata[0];  ?>" class="mt-4">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" value="<?php echo $ekdata[1]; ?>" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="class_name">Class:</label>
            <input type="text" class="form-control" value="<?php echo $ekdata[2]; ?>"  id="class_name" name="class_name" required>
        </div>
        <div class="form-group">
            <label for="roll_no">Roll No:</label>
            <input type="number" class="form-control" value="<?php echo $ekdata[3]; ?>" id="roll_no" name="roll_no" required>
        </div>
        <button type="submit" name="save" class="btn btn-primary mt-3">Update</button>
    </form>
</div>
<?php
  include("footer.html");
?>
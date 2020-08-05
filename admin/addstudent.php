<?php
session_start();
$insert =false;
if(isset($_SESSION['uid']))
{
    echo "";
}
else
{
    header('location:../login.php');
}

?>

<?php
include('header.php'); 
include('titlehead.php');
?>


<form method="post" action="addstudent.php">
    <table border="1"align="center" class="add">
        <tr>
            <th>Roll No</th>
            <td><input type="text" name="rollno" placeholder="Enter Roll No" required></td>
            <tr>

            <tr>
            <th>Full Name</th>
            <td><input type="text" name="fullname" placeholder="Enter full name" required></td>
            <tr>


            <tr>
            <th>City</th>
            <td><input type="text" name="city" placeholder="Enter city" required></td>
            <tr>

            <tr>
            <th>Parent contact No</th>
            <td><input type="text" name="parentno" placeholder="Enter parent contact No" required></td>
            <tr>

            <tr>
            <th>Stanard</th>
            <td><input type="number" name="stanard" placeholder="Enter standard" required></td>
            <tr>

            <tr>
            <th>image</th>
            <td><input type="file" name="simg"  reuired></td>
            <tr>
                <tr>
                    <td cospan="2" align="center"><input type="submit" name="submit" value="submit"></td>
                </tr>
    </table>
</form>
</body>
</html>

<?php

if(isset($_POST['submit']))
{
    include('../dbcon.php');
    $rolno=$_POST['rollno'];
    $name =$_POST['fullname'];
    $city =$_POST['city'];
    $pcon =$_POST['parentno'];
    $std=$_POST['stanard'];
  


    $qry="INSERT INTO `student`.`student`( `Roll No`, `name`, `city`, `pcontact`, `stanard`) VALUES (NULL,'$rolno','$name','$city','$pcon','$std')";

    $run = mysqli_query($con,$qry);
echo $qry;
   

    {
        ?>
        <script>
            alert('Data Inserted Successfully.');
        </script>
        
        <?php
    }
    else{
        echo "connection die";
    }

   

}
?>




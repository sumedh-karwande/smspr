<?php
session_start();
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
?>
   
<div class="admintittle">
<h1>Welcome to Admin Dashboard</h1>
<h7><a href="logout.php" style="float:right; margin-right:30px">logout</a></h7>
</div>

<div class="dashboard">
<table align="center";>
<tr>
<td>1.</td><td><a href="addstudent.php">Insert Student Details</a></td>
</tr>

<tr>
<td>2.</td><td><a href="updatestudent.php">Update Student Details</a></td>
</tr>

<tr>
<td>3.</td><td><a href="deletstudent.php">Delete Student Details</a></td>
</tr>

</table>
<div>
</body>
</html>
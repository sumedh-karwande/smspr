<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Mangment System</title>
</head>
<body>
<h1 align="center">Welcome to Student Mangment System</h1> 
<h4 align="right"><a href="login.php">Admin Login</a></h4>



<form method="post" action="index.php">
<table style="width:50%"align="center"border="1" >
<tr>
<td colspan="2"align="center">Student Information</td>
</tr>
<tr>
<td align="left">Choose standard</td>
<td>
<select name="std">
<option value="1">1st</option>
<option value="2">2st</option>
<option value="3">3st</option>
<option value="4">4st</option>
<option value="5">5st</option>
<option value="6">6st</option>
</select>
</td>
</tr>
<tr>
<td align="left">Enter Rollno </td>
<td><input type="text" name="rollno" required></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="submit" value="Show Info"></td>
</tr>


</table>
</form>




</body>
</html>
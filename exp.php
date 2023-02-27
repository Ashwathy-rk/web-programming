<?php
include "connect.php";
if(isset($_POST['submit']))
{
$title=$_POST['title'];
$author=$_POST['author'];
$edition=$_POST['edition'];
$publisher=$_POST['publisher'];
$sql = "INSERT INTO `book` (`title`, `author`, `edition`, `publisher`) VALUES ('$title', '$author', '$edition', '$publisher')";
$result=$con->query($sql);
if($result==TRUE)
{
echo "new record created successfully";
}
else
{
echo "Error".$sql."<br>".$con->error;
}
$con->close();
}
?>
<html>
<head>
<title>newcustomer</title>
</head>
<body>
<form method="POST" action="">
<h1>Register</h1><br>

Title<br>
<input type="text" name="title" required><br>
 Author<br>
<input type="text" name="author" required><br>
 Edition<br>
<input type="text" name="edition" required><br>
 Publisher<br>
<input type="text" name="publisher" required>
 <br>
<input type="submit" name="submit"
value="submit"><br><br><br><br><br>
<a href="pro_login.html">already have an
account</a><br><br>
</form>
</body><html>

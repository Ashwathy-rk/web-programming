<?php
include "connect.php";
    if (isset($_POST['update']))
	{
     $name=$_POST['name'];
     $email=$_POST['email'];
     $pass=$_POST['password'];
     $confirmpassword=$_POST['confirmpassword'];
     $address=$_POST['address'];
     
     $sql = "UPDATE `registration` SET `name`='$name',`email`='$email',`password`='$pass',`confirmpassword`='$confirmpassword',`address`='$address'";
    $result = $con->query($sql); 
    if ($result==TRUE) 
	{
        echo "Record updated successfully.";
    }
	else
	{
        echo "Error:".$sql."<br>".$con->error;
    }
    } 
if (isset($_GET['id'])) 
{
    $id = $_GET['id']; 
    $sql = "SELECT * FROM `registration` WHERE `name`='$name'";
    $result = $con->query($sql); 
    if ($result->num_rows>0) 
	{        
        while ($row=$result->fetch_assoc()) 
		{
		$name=$row['name'];
        $email=$row['email'];
        $pass=$row['password'];
        $confirmpassword=$row['confirmpassword'];
        $address=$row['address'];
       
        } 
?>
<form method="POST">
<h2><center>REGISTRATION FORM</center></h2>
Name:<br>
<input type="text" name="name" value="<?php echo $name; ?>"><br>
Email:<br>
<input type="email" name="email" value="<?php echo $email; ?>"><br>
Password:<br>
<input type="password" name="pass" value="<?php echo $pass; ?>"><br>
Comfirm Password:<br>
<input type="password" name="confirmpassword" value="<?php echo $confirmpassword; ?>"><br>
Address:<br>
<input type="address" name="address" value="<?php echo $address; ?>"><br>

<?php

    } else{ 

        header('Location: view.php');
		

    } 

}
?>

 
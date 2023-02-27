<?php
include "connect.php";
$sql = " SELECT * FROM `registration` " ;
$result=$con->query($sql);
?>
<html>
<head>
<title>view page</title>
</head>
<body>
<div class="container">
<h2>USERS</h2>
<table>
<tr>
<th>name</th>
<th>email</th>
<th>password</th>
<th>confirmpassword</th>
<th>gender</th>
<th>address</th>
<th>institution name</th>
<th>id</th>
<th>code</th>
</tr>
<?php
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
?>
<tr>

<td><?php echo $row['name'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['password'];?></td>
<td><?php echo $row['confirmpassword'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['address'];?></td>
<td><?php echo $row['instiname'];?></td>
<td><?php echo $row['teachersid'];?></td>
<td><?php echo $row['coursecode'];?></td>
<td><a href="update.php?id=<?php echo $row['teachersid'];?>">Edit</a></td>

<?php echo '<a href="update.php?teachersid='.$row["teachersid"].'">Edit</a></td>'; ?>

<td><a href="delete.php?id=<?php echo $row['teachersid'];?>">Delete</a></td>
<?php
	}
}
?>
</table>
</html>
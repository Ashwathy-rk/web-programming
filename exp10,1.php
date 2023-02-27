<?php
include "exp.php";
$sql = " SELECT * FROM `exp10` " ;
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
<td><?php echo $row['teachersid'];?></td></tr>






<?php
require "connect.php";
if(isset($_POST['sub']))
{ $bookhead=$_POST['btitle'];
 $store = "SELECT * FROM `book` WHERE `title` = '$bookhead'";
 $result=$con->query($store);
 if($is_query_run=mysqli_query($con,$store))
 {
 while($query_execute=mysqli_fetch_assoc($is_query_run))
 { ?><table
border="1"><tr><th>title</th><th>author</th><th>edition</th><th>publisher
</th></tr>

 <td><?php echo $query_execute["title"];?></td>
 <td><?php echo $query_execute["author"];?></td>
 <td><?php echo $query_execute["edition"];?></td>
 <td><?php echo $query_execute["publisher"];?></td></tr></table>

 <?php }
 }$con->close();
}
?>
<html>
 <head>
 <title>book search</title>
 </head>
 <body><form method="POST" action="">
 <label>enter the title</label>
 <input type="text" name="btitle">
 <input type="submit" name="sub" value="submit">
</form>
</body>
</html>

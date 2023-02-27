<form action = "" method = "POST">
name : <input type="text" name="name"><br> <br>
housename : <input type="text" name="housename"><br> <br>
unit: <input type="text" name="unit"><br> <br>
<input type="submit" name="calculate" value="calculate">
<table style="margin-left: 30%;border: 1px solid black;">
<th>Name</th>
<th>House Name</th>
<th>Unit</th>
<th>Amount</th>
<?php
$db = mysqli_connect("localhost","root","","exp");
	
if(isset($_POST['calculate'])){


$name = $_POST['name'];
$housename = $_POST['housename'];

$unit = $_POST['unit'];
if($unit < 100){
$bill = $unit * 5;
}
else if($unit>100 && $unit<200){
$bill = $unit * 7;
}
else{
$bill = $unit * 9;
}
$query1 ="INSERT INTO `electric`(`name`, `housename`,`unit`) VALUES ('$name','$housename','$unit') ";
$result1 = mysqli_query($db,$query1);
$query2 = "SELECT * FROM electric where name = '$name';";
$result2 = mysqli_query($db,$query2);
while($res = mysqli_fetch_assoc($result2)){
?>
<tr>
<td> <?php echo $res['name']?></td>
<td> <?php echo $res['housename']?></td>
<td> <?php echo $res['unit']?></td>
<td> <?php echo $bill ?></td>
</tr>
<?php
}
}
?>
<?php
$con=mysqli_connect("localhost","root","","project");
if(mysqli_select_db($con,"project"))
{
	echo 'connection success';
}
else
{
	echo 'connection failed';
}
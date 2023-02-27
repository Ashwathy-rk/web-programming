<html>
<head>
<link rel="stylesheet" href="C:\Users\Ashwathy R K\Desktop\html\external.css">
<style>
  
  body {
      background-image:url('https://thumbs.dreamstime.com/z/desk-student-concept-laptop-computer-study-exam-book-place-school-table-student-work-online-home-desktop-223633519.jpg');
	  height: 100%;
	   background-repeat: no-repeat;
      background-size:cover; 
      background-position: center;	  
	 }
    form {
      border: 1px solid ;
      padding: 20px;
      width: 500px;
	  border-radius:30px;
      margin: 0 auto;
	  background:linear-gradient(to bottom,green,black);
	color:pink;
    }

    h2 {
      text-align: center;
      margin-bottom: 30px;
    }
	input[type=address]{
  font-size: 18px;
  padding: 12px;
  margin-bottom: 20px;
  border: 1px solid black;
  }   
  </style>
</head>
<body>
<script>
function validate()
{
 var x=document.myform.name.value;
 var z=document.myform.pass.value;
 var n=document.myform.confirmpassword.value;
 var a=document.myform.address.value;
 var b=document.myform.id.value;
 var c=document.myform.inst.value;
 var d=document.myform.code.value;
 
 if(x==null || x=="")
 {
   alert("name field should not blank");
 }
 
 else if(z.length<8)
 {
    alert("password must contain 8 character");
 }
 else if(z!=n)
 {
    alert("password doesn't match");
 }
 else if(myform.gender[0].checked==false && myform.gender[1].checked==false)
 {
    alert("Please choose your gender");
 }
 else if(a==null || a=="")
 {
    alert("fill the address field");
  }
  else if(b==null || b=="")
 {
    alert("teachers id should be entered");
  }
  else if(c==null || c=="")
 {
    alert("enter the institution name");
  }
  else if(d==null || d=="")
 {
    alert("enter the course code");
  }

}
</script>
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
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$confirmpassword=$_POST['confirmpassword'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$inst=$_POST['instiname'];
$id=$_POST['teachersid'];
$code=$_POST['coursecode'];

$sql="INSERT INTO `registration`(`name`, `email`, `password`, `confirmpassword`, `gender`, `address`, `instiname`, `teachersid`, `coursecode`) VALUES ('$name','$email','$pass','$confirmpassword','$gender','$address','$inst','$id','$code')";

$result=$con->query($sql);
if($result==TRUE)
{
	echo "inserted succesfully";
}

}
$sql="select * from registration";
$result=$con->query($sql);
?>
<br>
<br>

<form name="myform" onsubmit=validate()  method="POST">
<h2><center>REGISTRATION FORM</center></h2>
Name:<br>
<input type="text" name="name"><br>
Email:<br>
<input type="email" name="email" value=" "><br>
Password:<br>
<input type="password" name="pass" value=""><br>
Comfirm Password:<br>
<input type="password" name="confirmpassword" value=""><br>
Gender:<br>
<input type="radio" name="gender" value="Male">Male<br>
<input type="radio" name="gender" value="Female">Female<br>
<input type="radio" name="gender" value="other">Other<br>
Address:<br>
<input type="address" name="address" value=""><br>
Institution name:<br>
<input type="text" name="instiname" value=""><br>
Teachers id:<br>
<input type="text" name="teachersid" value=""><br>
Course code:<br>
<input type="text" name="coursecode" value=""><br>


<br><input type="submit"  name="submit" value="submit"><br><br>
<button><a href="view.php">view</a></button>

</form>
</body>
</html>


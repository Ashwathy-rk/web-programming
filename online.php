<html>
<head> 
 <title>online exam</title>
<style>
body{
background-color:#6a5acd
}
</style>
</head>
<body>
<form action="#">
<u><h1 style="text-align: center; color:maroon;">ONLINE EXAM </h1> </u>
<div style="margin: 150px;">
 <h3 style="font-size: 25px;">1)Which of the following is the capital of Goa?</h3>
 <input type="radio" name="q1">Patna<br>
 <input type="radio" name="q1" id="a">Panaji<br>
 <input type="radio" name="q1">Peshawar<br>
 <input type="radio" name="q1">Pune<br>
 <h3 style="font-size: 25px;">2)Which is the largest coffee-producing state of India??</h3>
 <input type="radio" name="q2" id="b">Karnataka<br>
 <input type="radio" name="q2">Kerala<br>
 <input type="radio" name="q2">Goa<br>
 <input type="radio" name="q2">Sikkim<br>
 <h3 style="font-size: 25px;">3)Dudhsagar falls is located in______.</h3>
 <input type="radio" name="q3">UP<br>
 <input type="radio" name="q3">Delhi<br>
 <input type="radio" name="q3" id="c">Goa<br>
 <input type="radio" name="q3">Assam<br>
 <h3 style="font-size: 25px;">4)Mahabalipuram is located in______</h3>
 <input type="radio" name="q4">Bihar<br>
 <input type="radio" name="q4">Pune<br>
 <input type="radio" name="q4">Kerala<br>
 <input type="radio" name="q4" id="d">Tamil Nadu<br>
 <h3 style="font-size: 25px;">5)Harihar Fort is located in______</h3>
 <input type="radio" name="q5" id="e">Maharashtra<br>
 <input type="radio" name="q5">Sikkim<br>
 <input type="radio" name="q5">Assam<br>
 <input type="radio" name="q5">Delhi<br><br>
 <td></td><input type="button" value="Submit" onclick="result()">
</div>
<script>
 function result(){
 var score=0;
 if(document.getElementById("a").checked){
 score++;
 }
 if(document.getElementById("b").checked){
 score++;
 } 
 if(document.getElementById("c").checked){
 score++;
 } 
 if(document.getElementById("d").checked){
 score++;
 } 
 if(document.getElementById("e").checked){
 score++;
 } 
 document.write("YOUR SCORE : ",score); 
 }
</script>
</form>
</body> 
</html>


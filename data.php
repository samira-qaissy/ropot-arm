<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
div {
background-image: url('iii.jpg');
 background-repeat: no-repeat;
background-attachment: fixed;
  background-size: cover;
}
.button {
  background-color: blacke; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button:hover{
  background-color: white; 
  border: black;
  color: black;
  padding: 7.5px 32px;
  text-align: center;
  text-decoration: #4CAF50;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button1 {background-color: black; color: white;}  
.button2 {background-color: black; color: white;} 
<h1>font-size: 40px</h1>
</meta>
</style>
</head>
<body>
<div style='text-align:center'>
<h1> Robotic Arm: </h1>
<form action="data.php" method = "POST" >
<div class="slidecontainer1"> 
<p>sliderr1: <span id="demo1"></span></p> 
<input type="range" min="0" max="180" value ="90"  class="sliderr1" id="myRange1" name= "sliderr1">
</div>
<div class="slidecontainer2">
<p>sliderr2: <span id="demo2"></span></p>
  <input type="range" min="0" max="180" value ="90" class="sliderr2" id="myRange2" name= "sliderr2">
</div>
<div class="slidecontainer3">
<p>sliderr3: <span id="demo3"></span></p>
  <input type="range" min="0" max="180" value="90" class="sliderr3" id="myRange3" name= "sliderr3">
  
</div>
<div class="slidecontainer4">
<p>sliderr4: <span id="demo4"></span></p>
  <input type="range" min="0" max="180" value="90" class="sliderr4" id="myRange4" name="sliderr4">
</div>
<div class="slidecontainer5">
<p>sliderr5: <span id="demo5"></span></p>
  <input type="range" min="0" max="180" value="90" class="sliderr5" id="myRange5" name= "sliderr5">
</div>
<div class="slidecontainer6">
<p>sliderr6: <span id="demo6"></span></p>
  <input type="range" min="0" max="180" value="90" class="sliderr6" id="myRange6" name= "sliderr6">
 <p> </p> 
<button class="button button1" name="onbutton"> onbutton </button>
<button class="button button2" name="savebutton"> savebutton </button>
</div>
<script>
var sliderr1 = document.getElementById("myRange1");
var  output1 = document.getElementById("demo1");
output1.innerHTML = sliderr1.value;
sliderr1.oninput = function() {
    output1.innerHTML = this.value;
}
var sliderr2 = document.getElementById("myRange2");
var  output2 = document.getElementById("demo2");
output2.innerHTML = sliderr2.value;
sliderr2.oninput = function() {
    output2.innerHTML = this.value;
}
var sliderr3 = document.getElementById("myRange3");
var  output3 = document.getElementById("demo3");
output3.innerHTML = sliderr3.value;
sliderr3.oninput = function() {
    output3.innerHTML = this.value;
}
var sliderr4 = document.getElementById("myRange4");
var  output4 = document.getElementById("demo4");
output4.innerHTML = sliderr4.value;
sliderr4.oninput = function() {
    output4.innerHTML = this.value;
}
var sliderr5 = document.getElementById("myRange5");
var  output5 = document.getElementById("demo5");
output5.innerHTML = sliderr5.value;
sliderr5.oninput = function() {
    output5.innerHTML = this.value;
}
var sliderr6 = document.getElementById("myRange6");
var  output6 = document.getElementById("demo6");
output6.innerHTML = sliderr6.value;
sliderr6.oninput = function() {
    output6.innerHTML = this.value;
}
</script>
</body>

<?php
  $host = 'localhost';
  $user = 'root';
  $password = '';
  $db = 'task1';
  $conn = new mysqli($host,$user , $password, $db );
if(isset($_POST['onbutton'])) {
$onn = $_POST['onbutton'];
    $sql = "select * from ontable WHERE 1";
    $sql = "INSERT INTO  ontable (onn) VALUES ('1')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Item successfuly Added ";
    }
    else{
        echo "error unable to past ". $sql . ":-" . mysqli_error($conn);
    }
}
else if(isset($_POST['savebutton'])) {
$sliderr1 = $_POST['sliderr1'];
$sliderr2 = $_POST['sliderr2'];
$sliderr3 = $_POST['sliderr3'];
$sliderr4 = $_POST['sliderr4'];
$sliderr5 = $_POST['sliderr5'];
$sliderr6 = $_POST['sliderr6'];
    $sql = "select * from savee WHERE 1";
    $sql = "INSERT INTO savee (sliderr1,sliderr2,sliderr3,sliderr4,sliderr5,sliderr6) VALUES ('$sliderr1','$sliderr2','$sliderr3','$sliderr4','$sliderr5','$sliderr6')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Item successfuly Added ";
    }
    else{
        echo "error unable to past ". $sql . ":-" . mysqli_error($conn);
    }
}
?>
</html>



<!DOCTYPE html>

<html>

<head lang="en-US">
<title>Student</title>


<meta charset="UTF-8">
<meta name="description" content="Web Programming">
<meta name="keywords" content="HTML">
<meta name="author" content="Pranav">

<script>
	function valid()
{
		var p=document.myform.class.value;
		if(p=="no")
		{
			alert("Please Select Class");
			return false;
		}
	var x=document.myform.rollno.value;
		if(x ==""){
			alert("Please Enter Rollno!!!");
			return false;
		}

	
	var p=document.myform.dept.value;
		if(p=="no")
		{
			alert("Please Select Department");
			return false;
		}
		
}
</script>
<style>
body{
background-color: #B0C4DE;
}
table {
    display: table;
    border-collapse: separate;
    border-spacing: 2px;
    border-color: gray;
}
input[type=submit] {
    background-color: blue;
    color: white;
    padding: 14px 20px;
   
}
div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
	width: 75%;

    padding: 20px;

	margin: auto;
}
input[type=submit]:hover {
    background-color: #00008B;
}
input[type=text ], select {
    width: 75%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=number], select {
    width: 75%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=date], select {
    width: 75%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
h1 {
    color: gray;
    font-family: courier;
    font-size: 300%;
}

ul {
    
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: blue;
	width: 75%;
}

li {
    float: left;
}

li a {
    display: block;
    color: black;
    text-align: center;
    padding: 14px 20px;
    text-decoration: none;
	
}

li a:hover {
    background-color:  #00008B ;
}
td{
    text-align: center;
}
</style>
</head>
<body>
<h1 style="color:blue;"><center>Students Projects Information</centre></h1>
<center>
<h2>
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="page1.php">Faculty</a></li>
<li><a href="page2.php">Student</a></li>
</ul>
</h2>
</center>
<div>
 <fieldset>
 
  
<form name="myform" method="post" onsubmit="return valid()">
  
  Class:<br>
  <select name="class">
    <option value="no" >---Select Class---</option>
  <option value="fe" >First Year</option>
  <option value="se">Second Year</option>
  <option value="te">Third Year</option>
  <option value="be">Fourth Year</option>
</select>
  <br>
  Roll no:<br>
  <input type="number" name="rollno" id="rollno" min="1" max="85" value="">
 
<br>

  Department:<br>
  <select name="dept">
    <option value="no" >---Select Department---</option>
  <option value="it" >Information Technology</option>
  <option value="comp">Computer Engineering</option>
  <option value="extc">Electronic and Telecommunication</option>
  <option value="mech">Mechanical Engineering</option>
</select>

  <br>
   &nbsp;
  &nbsp; &nbsp;
  &nbsp;
<center><input type="submit" value="Submit" name="submit"></center>
  &nbsp;
  &nbsp;
   &nbsp;
  &nbsp;
  <br>
</form>
<?php
    
		
	if(isset($_POST['submit']))
{
$class=$_POST["class"];
$rollno=$_POST["rollno"];
$depart=$_POST["dept"];

include "connect.php";

$sql = "INSERT INTO stud VALUES('$class','$rollno','$depart')";
      
		$result = mysql_query($sql);
		echo "<h2><font color=green>Member successfully added</font></h2>";
}

?>
<table border="1">
  <tr>
  <th>Sr no.</th>
  	<th>Project Title</th>
    <th>Faculty Name</th>
    <th>Submission Date</th>
    <th>Assigned Date</th>
  </tr>
  <tr>
    <td>1</td>
    <td><input type="text" name="projecttitle"></td>
    <td><input type="text" name="facultyname"></td>
    <td><input type="text" name="sd"></td>
     <td><input type="text" name="ad"></td>
    </tr>  
      <tr>
    <td>2</td>
    <td><input type="text" name="projecttitle"></td>
    <td><input type="text" name="facultyname"></td>
    <td><input type="text" name="sd"></td>
        <td><input type="text" name="ad"></td>
    </tr> 
      <tr>
    <td>3</td>
    <td><input type="text" name="projecttitle"></td>
    <td><input type="text" name="facultyname"></td>
    <td><input type="text" name="sd"></td>
        <td><input type="text" name="ad"></td>
    </tr> 
    <tr>
    <td>4</td>
    <td><input type="text" name="projecttitle"></td>
    <td><input type="text" name="facultyname"></td>
    <td><input type="text" name="sd"></td>
        <td><input type="text" name="ad"></td>
    </tr> 
</table>


</fieldset>
</div>

<hr>
<footer>Designed by Pranav Kud</footer>
</body>
</html>


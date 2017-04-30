
<!DOCTYPE html>

<html>

<head lang="en-US">
<script>
	function valid1()
{
	var n=document.myform.dept.value;
		if(n=="no")
		{
			alert("Please select department");
			return false;
		}
	var o=document.myform.faculty.value;
		if(o=="no")
		{
			alert("Please select faculty");
			return false;
		}
	var x=document.myform.projectname.value;
		if(x ==""){
			alert("Please Enter ProjectName!!!");
			return false;
		}
		if(!isNaN(x))
		{
			alert("Please Enter valid ProjectName!!!");
			return false;
		}
	var y=document.myform.assign.value;
	var a=new Date(y);
	var z=document.myform.submission.value;
	var b=new Date(z);
		if(a>b)
		{
			alert("Please Enter valid Dates");
			return false;
		}
	var p=document.myform.noofstudents.value;
		if(p==""){
			alert("Please enter no of students");
			return false;
		}
	
}
</script>
<style>
input[type=submit] {
    width: 10%;
    background-color: blue;
    color: white;
    padding: 14px 20px;
}

body{
background-color: #B0C4DE;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
	width: 65%;

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
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=date], select {
    width: 50%;
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

li a:hover {
    background-color:  #00008B ;
}

li a{
    display: block;
    color: black;
    text-align: center;
	list-style-type: none;
    padding: 14px 20px;
    text-decoration: none;

}


td{
    text-align: center;
}
</style>
<title>Students Projects</title>


<meta charset="UTF-8">
<meta name="description" content="Web Programming">
<meta name="keywords" content="HTML">
<meta name="author" content="Pranav">


</head>
<body >
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
 
   
<form name="myform"  method="post" onsubmit="return valid1()">

Department:<br>
  <select name="dept">
    <option value="no" >---Select Department---</option>
  <option value="it" >Information Technology</option>
  <option value="comp">Computer Engineering</option>
  <option value="extc">Electronic and Telecommunication</option>
  <option value="mech">Mechanical Engineering</option>
</select>
<br>

Faculty Name:<br>
  <select name="faculty">
   <option value="no" >---Select Faculty---</option>
  <option value="Nilesh" >Nilesh</option>
  <option value="Sushree">Sushree</option>
  <option value="Madhavi">Madhavi</option>
  <option value="Namita">Namita</option>
</select>
<br>
  Project Name:<br>
  <input type="text" name="projectname" id="projectname" value="" >
  <br>
  
  Assign Date:<br>
  <input type="date" name="assign" value=""><br>
  
  Submission Date:<br>
  <input type="date" name="submission" value=""><br>
  
  No. of Students:<br>
  <input type="number" name="noofstudents" min="1" max="4" > <br>

  <center><input type="submit" value="Submit" name="submit"></center>
</form> 
</fieldset>
	<?php
    
		
	if(isset($_POST['submit']))
{
$dept=$_POST["dept"];
$faculty=$_POST["faculty"];
$projectname=$_POST["projectname"];
$assign=$_POST["assign"];
$submission=$_POST["submission"];
$noofstudents=$_POST["noofstudents"];

include "connect.php";

$sql = "INSERT INTO project VALUES('$dept','$faculty','$projectname','$assign','$submission','$noofstudents')";
      
		$result = mysql_query($sql);
		echo "<h2><font color=green>Member successfully added</font></h2>";
}
?>
<fieldset>


 <table border="1"; align="center">
  <tr>
  	<th>Sr no.</th>
    <th>Name</th>
    <th>Rollno</th>
    <th>Class</th>
  </tr>
  <tr>
    <td>1</td>
    <td ><input type="text" name="name"></td>
    <td style="width:30%;"><input type="number" name="rollno" min="1" max="85"></td>
    <td style="width:40%;">  <select name="class">
  <option value="fe" >First Year</option>
  <option value="se">Second Year</option>
  <option value="te">Third Year</option>
  <option value="be">Fourth Year</option>
</select></td>
    </tr>  
      <tr>
    <td>2</td>
    <td><input type="text" name="name"></td>
    <td><input type="number" name="rollno" min="1" max="85"></td>
    <td> <select name="class">
  <option value="fe" >First Year</option>
  <option value="se">Second Year</option>
  <option value="te">Third Year</option>
  <option value="be">Fourth Year</option>
</select></td>
    </tr> 
      <tr>
    <td>3</td>
    <td><input type="text" name="name"></td>
    <td><input type="number" name="rollno" min="1" max="85"></td>
    <td> <select name="class">
  <option value="fe" >First Year</option>
  <option value="se">Second Year</option>
  <option value="te">Third Year</option>
  <option value="be">Fourth Year</option>
</select></td>
    </tr> 
    <tr>
    <td>4</td>
    <td><input type="text" name="name"></td>
    <td><input type="number" name="rollno" min="1" max="85"></td>
    <td> <select name="class">
  <option value="fe" >First Year</option>
  <option value="se">Second Year</option>
  <option value="te">Third Year</option>
  <option value="be">Fourth Year</option>
</select></td>
    </tr> 
</table> 

</fieldset>
</div>
&nbsp;
&nbsp;

&nbsp;
&nbsp;
  
  

<hr>
<footer>Designed by Pranav Kud</footer>

</body>
</html>



<!DOCTYPE html>

<html>

<head lang="en-US">
<title>Faculty</title>


<meta charset="UTF-8">
<meta name="description" content="Web Programming">
<meta name="keywords" content="HTML">
<meta name="author" content="Pranav">

<script>
	function valid()
{
	var x=document.myform.facultyname.value;
		if(x ==""){
			alert("Please Enter Faculty Name!!!");
			return false;
		}
		if(!isNaN(x))
		{
			alert("Please Enter valid Faculty Name!!!");
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
 
  
<form name="myform"  method="post" onsubmit="return valid()">

  Faculty Name:<br>
  <input type="text" name="facultyname" id="facultyname" value="" autocomplete>
 
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
  &nbsp;
  &nbsp;
  &nbsp;
<center><input type="submit" value="Submit" name="submit"></center>
&nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  <br>
    <?php
    
		
	if(isset($_POST['submit']))
{
$facultyname=$_POST["facultyname"];
$dept=$_POST["dept"];

include "connect.php";

$sql = "INSERT INTO faculty VALUES('$facultyname','$dept')";
      
		$result = mysql_query($sql);
		echo "<h2><font color=green>Member successfully added</font></h2>";
}

?>
Project Details:<br>
 <textarea name="message" rows="10" cols="30">

</textarea>

</form>
</fieldset>
</div>

<hr>
<footer>Designed by Pranav Kud</footer>
</body>
</html>


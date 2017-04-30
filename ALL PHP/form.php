<?php

$servername="localhost";
$username="root";
$password="";
$dbname = "university";


$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
	die("failed");
}
echo"connected Successfully";

  $name_form=$_POST['name'];
  $exam_form=$_POST['exam'];
  $year_form=$_POST['year'];
  $seatno_form=$_POST['seatno'];
  $register_form=$_POST['register'];
  $email_form=$_POST['email'];
  $ccode_form=$_POST['ccode'];
  $ctitle_form=$_POST['ctitle'];
  $ccredits_form=$_POST['ccredits'];
  $ese_form=$_POST['ese'];
  $ia_form=$_POST['ia'];
  $overall_form=$_POST['overall'];
  $creditearned_form=$_POST['creditearned'];
  $gradepoints_form=$_POST['gradepoints'];
  $cxg_form=$_POST['cxg'];
  
  
    $sql="INSERT INTO table(name,exam,year,seatno,register,email,ccode,ctitle,ccredits,ese,ia,overall,creditearned,gradepoints,cxg) VALUES('$name_form','$exam_form','$year_form','$seatno_form','$register_form','$email_form','$ccode_form','$ctitle_form','$ccredits_form','$ese_form','$ia_form','$overall_form','$creditearned_form','$gradepoints_form','$cxg_form')"or die("mysql error");


/*
$extract=mysqli_query($_connect,"SELECT * FROM form ") or die ("Unable to extract");
  $numrows=mysqli_num_rows($extract);

if($numrows!=0)
  {

      while ($rows=mysqli_fetch_assoc($extract))
      {
 $name_form=$_POST['name'];
  $exam_form=$_POST['exam'];
  $year_form=$_POST['year'];
  $seatno_form=$_POST['seatno'];
  $register_form=$_POST['register'];
  $email_form=$_POST['email'];
  $ccode_form=$_POST['ccode'];
  $ctitle_form=$_POST['ctitle'];
  $ccredits_form=$_POST['ccredits'];
  $ese_form=$_POST['ese'];
  $ia_form=$_POST['ia'];
  $overall_form=$_POST['overall'];
  $creditearned_form=$_POST['creditearned'];
  $gradepoints_form=$_POST['gradepoints'];
  $cxg_form=$_POST['cxg'];
  
  
    $sql="INSERT INTO table(name,exam,year,seatno,register,email,ccode,ctitle,ccredits,ese,ia,overall,creditearned,gradepoints,cxg) VALUES('$name_form','$exam_form','$year_form','$seatno_form','$register_form','$email_form','$ccode_form','$ctitle_form','$ccredits_form','$ese_form','$ia_form','$overall_form','$creditearned_form','$gradepoints_form','$cxg_form')"or die("mysql error");

}*/

$conn->close();


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>University of Mumbai</title>
    <link rel="stylesheet" href="style.css" />
    <style>
    #p01
    {
    color:red;
    font-family:Old English Text MT;
    text-align:center;
    font-size:200%;
    float: center;
    }

    .final
   {
       height: 1350px;
       width:800px;
       background-color:white;
   }

label.error { float: none; color: red; padding-left: .5em; vertical-align: top; }



    </style>
    <meta charset=”utf-8? />
<script language=”javascript” type=”text/javascript” src=”https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js”></script>
<script language=”javascript” type=”text/javascript” src=”http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js”></script>
<script type="text/javascript" src="jquery.js"></script>

</head>
<body>

<form name="form" onsubmit="return validateForm()" method="post" action="form.php" id="valid">

    <center>
    <div class="final">
<table>
		<tr>
		<td style="width: 5,5%;height: 40%;align:"left";"><img src="download.jpg" style="height:75px; width:75px;left-margin:30px;top-margin:"></td>
		<td style="width: 94.5%;height: 15%;align:"center" "><p id="p01">University of Mumbai</p></td>
		</tr>

	</table>
		<font color="red" size="4"><center>GRADE CARD</center></font>
<table>
    <th><a href="form1.html">Home</a></th>
    <th><a href="grade.html">Grading System</a></th>
    <th><a href="apply.html">Apply Online</a></th>
    <th><a href="about.html">About University</a></th>
</table>

	<fieldset>
	    <legend>Personal Information :</legend>
		<br>


        <label for="name">Name:</label><input type="text" name="name" minlength="4"size="20">&nbsp&nbsp&nbsp&nbsp&nbsp
		<br>

		<br>EXAMINATION: <select name="exam" id="exam">
            <option value="no" checked>--Select Semester--</option>
			<option value="SEM1">FIRST YEAR ENGINEERING SEMESTER l(CBGS)</option>
			<option value="SEM2">FIRST YEAR ENGINEERING SEMESTER II(CBGS)</option>
			<option value="SEM3">SECOND YEAR ENGINEERING SEMESTER lll(CBGS)</option>
			<option value="SEM4">SECOND YEAR ENGINEERING SEMESTER lV(CBGS)</option>
			<option value="SEM5">THIRD YEAR ENGINEERING SEMESTER lV(CBGS)</option>
			<option value="SEM6">THIRD YEAR ENGINEERING SEMESTER lV(CBGS)</option>
			<option value="SEM7">FOURTH YEAR ENGINEERING SEMESTER lV(CBGS)</option>
			<option value="SEM8">FOURTH YEAR ENGINEERING SEMESTER lV(CBGS)</option>
		</select><br>

		<br>


		<br>HELD IN :<select name="year" id="year">
            <option value="no" checked>--Select year--</option>
            <option value="DEC 2015">DEC 2015</option>
			<option value="MAY 2016">MAY 2016</option>
			<option value="DEC 2016" >DEC 2016</option>
			<option value="MAY 2017">MAY 2017</option>
			<option value="DEC 2017">DEC 2017 </option>
			<option value="MAY 2018">MAY2018</option>
			<option value="DEC 2018">DEC 2018</option>
			<option value="MAY 2019">MAY 2019</option>
		</select><br>
		<br>SEAT NUMBER :<input type="number" placeholder="Enter 7 digit number " maxlength="7" name="seatno">
		<br>
		<br>REGISTRATION NO. :<input type="number" name="register" placeholder="Enter 11 digit number" maxlength="11">
        <br>
        <br>Email ID:<input type="Email" name="email" placeholder="Enter Email address">
        <br>        



	</fieldset>
	<br>
	<fieldset>
		<br>COURSE CODE :<input type="text" name="ccode">
        <br>
		<br>COURSE TITLE :<input type="text" name="ctitle">
        <br>
        <br>
        <strong>THEORY :</strong>
        <br>
        <br>COURSE CREDITS :<input type="number" name="ccredits" onclick="myFunction()" maxlength="2">
        <br>
        <br>
        GRADES:
        <br>
		<br>ESE/PR/OR   :<input type="text" name="ese">
        <br>
		<br>IA/TW     :<input type="text" name="ia">
        <br>
		<br>OVERALL     :<input type="text" name="overall">
        <br>
        <br>CREDIT EARNED(C) :<input type="number" name="creditearned" maxlength="2">
        <br>
        <br>GRADE POINTS(G) :<input type="number" name="gradepoints" maxlength="2">
        <br>
        <br>C X G :<input type="number" name="cxg">
        <br>
        
        
        
        
        
        
         <br>
           <strong>PRACTICAL :(should not be entered by users)</strong>
        <br>
        <br>COURSE CREDITS :<input type="number" onclick="myFunction()"maxlength="2">
        <br>
        <br>
        GRADES:
        <br>
		<br>ESE/PR/OR :<input type="number">
        <br>
		<br>IA/TW :<input type="number">
        <br>
		<br>OVERALL :<input type="number">
        <br>
       <br>CREDIT EARNED(C) :<input type="number"onclick="myFunction()" maxlength="2">
        <br>
       <br>GRADE POINTS(G) :<input type="number" onclick="myFunction()" maxlength="2">
        <br>
        <br>C X G :<input type="number">
        <br>
		<br>
		<button type="submit" value="Submit"name="submit" onclick="validateForm()" action="form.php">Submit</button>
			<button type="reset" value="Reset">Reset</button>

	</fieldset>
</form>
    </div>
    </center>
</body>
</html>


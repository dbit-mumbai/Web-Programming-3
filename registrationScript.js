$(document).ready(function(){
	
	var fnameCheck = false;
	var mnameCheck = false;
	var lnameCheck = false;
	var contactCheck = false;
	var emailCheck = false;
	var cityCheck = false;
	var studentIdCheck= false;
	var genderCheck=false;
	var skillCheck=false;
	var membershipCheck=false;
	
	$("#registration").submit(function(){
		genderCheck = check_gender();
		if(genderCheck)
		{
			skillCheck = skill_check();
			if(skillCheck)
			{
				membershipCheck = check_membership();
			}
		}
		if(fnameCheck && mnameCheck && lnameCheck && contactCheck && emailCheck && cityCheck && studentIdCheck && genderCheck && skillCheck && membershipCheck)
		{
			return true;
		}
		else{
			alert("PLEASE FILL ALL THE DETAILS !!!");
			return false;
			
		}
		
	});
	
	function check_gender(){
		var len = $('input[name="gen"]:checked');
		if(len.length<1)
		{
			alert("Select Your Gender");
			return false;
		}
		else{
			return true;
		}
		
	}
	
	function skill_check(){
			
		var len= $('input[name="skl"]:checked');
		if(len.length<1)
		{
			alert("Select Your Technical Skills");
			return false;
		}
		else {
			return true;
		}
	
	}
	function check_membership(){
		var check1 = $("input[name='dmem']:checked").val();
		var check2 = $("input[name='imem']:checked").val();
		if(check1==check2)
		{
			alert("Choose your CSI-Membership");
			return false;
		}
		else { 
			return true;
		}
	}
	
	
	$("#fname").focusout(function(){
		var fnameInput = $("#fname").val();
		var letters = /^[A-Za-z]+$/;
		if(fnameInput.match(letters))
		{
			$("#fname_error").hide();
			fnameCheck=true;
		}
		else{	
			$("#fname_error").html("Invalid Name");
			$("#fname_error").show();
			fnameCheck= false;
			
		}
	});
	
	$("#mname").focusout(function(){
		var mnameInput = $("#mname").val();
		var letters = /^[A-Za-z]+$/;
		if(mnameInput.match(letters))
		{
			$("#mname_error").hide();
			mnameCheck= true;
		}
		else{	
			$("#mname_error").html("Invalid Name");
			$("#mname_error").show();
			mnameCheck= false;
			
		}
	});
	
	$("#lname").focusout(function(){
		var lnameInput = $("#lname").val();
		var letters = /^[A-Za-z]+$/;
		if(lnameInput.match(letters))
		{
			$("#lname_error").hide();
			lnameCheck=true;
		}
		else{	
			$("#lname_error").html("Invalid Name");
			$("#lname_error").show();
			lnameCheck= false;
			
		}
	});
	

	
	$("#contact").focusout(function(){
		var len=$("#contact").val();
		if(isNaN(len) || (len.length!=10))
		{
			$("#contact_error").html("Enter 10 digit phone No.");
			$("#contact_error").show();
			contactCheck=false;
			
		}
		else{
			$("#contact_error").hide();
			contactCheck=true;
		}
	});
	
	$("#email").focusout(function(){
		var emailInput = $("#email").val();
		var email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		if(emailInput.match(email))
		{
			$("#email_error").hide();
			emailCheck=true;
		}
		else{	
			$("#email_error").html("Invalid email");
			$("#email_error").show();
			emailCheck=false;
		}
	});	
	
	$("#city").focusout(function(){
		var cityInput = $("#city").val();
		var letters = /^[A-Za-z]+$/;
		if(cityInput.match(letters))
		{
			$("#city_error").hide();
			cityCheck=true;
		}
		else{	
			$("#city_error").html("Invalid City Name");
			$("#city_error").show();
			cityCheck= false;
		
		}
	});
	
	$("#sid").focusout(function(){
		var len=$("#sid").val();
		if(isNaN(len) || (len.length!=10))
		{
			$("#sid_error").html("Enter 10 digit student ID no.");
			$("#sid_error").show();
			studentIdCheck=false;
			
		}
		else{
			$("#sid_error").hide();
			studentIdCheck=true;
		}
	});
	

	
	$("input[name='dmem']").change(function(){
			var check=$("input[name='dmem']:checked").val();
			if(check!="")
			{
				$("input[name='imem']").each(function(){
					$(this).attr('disabled', true);
				});
			}
			else{
				
				$("input[name='imem']").each(function(){
					$(this).attr('disabled', false);
				});
			}
		if(check==1)
		{
			$("#amount").val("400");
		}
		else if(check==2)
		{
			$("#amount").val("600");
		}
		else if(check==3)
		{
			$("#amount").val("750");
		}
		else{
			$("#amount").val("");
		}
		
		
		
	});
	$("input[name='imem']").change(function(){
		var check=$("input[name='imem']:checked").val();
		if(check!="")
		{
			$("input[name='dmem']").each(function(){
				$(this).attr('disabled', true);
			});
		}
		else{
			
			$("input[name='dmem']").each(function(){
				$(this).attr('disabled', false);
			});
		}
		if(check==1)
		{
			$("#amount").val("600");
		}
		else if(check==2)
		{
			$("#amount").val("1100");
		}
		else if(check==3)
		{
			$("#amount").val("1500");
		}
		else if(check==4){
			$("#amount").val("2000");
		}
		else{
			$("#amount").val("");
		}
	});

		
	
	
});


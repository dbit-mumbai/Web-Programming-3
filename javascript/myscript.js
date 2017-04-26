
function validateForm() {

 var x = document.forms["form"]["fname"];
    if (x.value == "") {

        alert("Name should not be blank !!");
	
        return false;
    }

	if (! allLetter(x)) {
		 alert("FName should be all characters!!");
		 return false;
	}




var z = document.forms["form"]["email"];

  if (z.value == "")
  {
                alert("Email should not be blank !!");

		return false;
            }

	if (! ValidateEmail2(z)) {
		 alert('Please input valid Email ID!!!');
      return false;
	}


var t = document.forms["form"]["dept"];
	if (!deptselect(t)) {
		 alert('Please select Department!!!');
      return false;
	}








            function allLetter(inputtxt)
                {
                 var letters = /^[A-Za-z]+$/;
                 if(inputtxt.value.match(letters))
                   {
              	     return true;
                   }
                 else
                   {
              	     return false;
                   }
                }



			 function ValidateEmail2(inputText) {

				var valid = true;

				if (inputText.value.indexOf('@') == -1) {
					valid = false;
				} else {

					var parts = inputText.value.split('@');
					var domain = parts[1];


					if (domain.indexOf('.') == -1) {

						valid = false;

					} else {

						var domainParts = domain.split('.');
						var ext = domainParts[1];

					}

				}


				return valid;

			};






			function deptselect(dept)
			{
				if(dept.value == "")
					{
						return false;
					}
					else
					{
						return true;
					}
			}




			}

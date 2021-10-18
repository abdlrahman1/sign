	
	function show_signup()
{
	document.querySelector('.con').classList.toggle('show_signup');
	
	if (document.getElementById('black2').style.display == "block"){
		document.getElementById('black2').style.display = "none";
	} else {
			document.getElementById('black2').style.display = "block";
		}
		
	}
	
	
function signup_fun()

{
var text=window.signup_email.value;
var patt;
patt=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{3,4})$/;
var b=patt.test(text);


if(b)
{
document.getElementById('signup_email').style.border="1px solid green";
document.getElementById('email_error').innerHTML="good";
document.getElementById('email_error').style.color="green";
}

else{
document.getElementById('signup_email').style.border="1px solid red ";
document.getElementById('email_error').innerHTML="wrong";
document.getElementById('email_error').style.color="red";
}


var tex=window.signup_password.value;
var pat;
pat=/[A-Za-z .]{3,20}$/;
var a=pat.test(tex);


if(a)
{
document.getElementById('signup_password').style.border="1px solid green";
document.getElementById('pass_error').innerHTML="good";
document.getElementById('pass_error').style.color="green";
}

else{
document.getElementById('signup_password').style.border="1px solid red ";
document.getElementById('pass_error').innerHTML="wrong";
document.getElementById('pass_error').style.color="red";




var text=window.username.value;
var patt;
patt=/^[a-z0-9_-]{3,16}$/;
var b=patt.test(text);


if(b)
{
document.getElementById('username').style.border="1px solid green";
document.getElementById('username_error').innerHTML="good";
document.getElementById('username_error').style.color="green";
}

else{
document.getElementById('username').style.border="1px solid red ";
document.getElementById('username_error').innerHTML="wrong";
document.getElementById('username_error').style.color="red";
}

}

	
	}
	
	
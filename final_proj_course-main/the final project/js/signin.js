	function showlogin()
{
	document.querySelector('.con_signin').classList.toggle('showlogin');
	}
	
	
function fun()

{
var text=window.email.value;
var patt;
patt=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{3,4})$/;
var b=patt.test(text);


if(b)
{
document.getElementById('email').style.border="2px solid green";
document.getElementById('email_error2').innerHTML="good";
document.getElementById('email_error').style.color="green";
}

else{
document.getElementById('email').style.border="2px solid red ";
document.getElementById('email_error2').innerHTML="wrong";
document.getElementById('email_error2').style.color="red";
}


var tex=window.password.value;
var pat;
pat=/[A-Za-z .]{3,20}$/;
var a=pat.test(tex);


if(a)
{
document.getElementById('password').style.border="2px solid green";
document.getElementById('pass_error2').innerHTML="good";
document.getElementById('pass_error2').style.color="green";
}

else{
document.getElementById('password').style.border="2px solid red ";
document.getElementById('pass_error2').innerHTML="wrong";
document.getElementById('pass_error2').style.color="red";
}

	
	}
$(document).ready(function(){ 
//catch global variables
 var fname=$('#fname');
 var txtfname=$('#txtFname');

 var nic=$('#nic');
 var txtnic=$('#txtNic');

 var email=$('#email');
 var txtemail=$('#txtEmail');

var pw=$('#pw');
var txtPw=$('#txtPw');

var repw=$('#repw');
var txtRepw=$('#txtRepw');
//name validation
function validatefname(){
	if (fname.val().length<4){
		fname.removeClass('valid1');
		fname.addClass('error1');
		txtfname.removeClass('valid2');
		txtfname.addClass('error2');
		txtfname.text('Full Name must be three or more characters');
	}
	else{
		fname.removeClass('error1');
		fname.addClass('valid1');
		txtfname.removeClass('error2');
		txtfname.addClass('valid2');
		txtfname.text('Okay');
	}
	
}
fname.keyup(validatefname);

//password validation
function validatepassword(){
	if(pw.val().length<=3){
		pw.removeClass('valid1');
		pw.addClass('error1');
		txtPw.removeClass('valid2');
		txtPw.addClass('error2');
		txtPw.text('Invaild password')

	}
	else{
		pw.removeClass('error1');
		pw.addClass('valid1');
		txtPw.removeClass('error2');
		txtPw.addClass('valid2');
		txtPw.text('Valid password');
	}
}
pw.keyup(validatepassword);

//password matching validation
function matchpassword(){
	if (pw.val()!=repw.val() ){
		repw.removeClass('valid1');
		repw.addClass('error1');
		txtRepw.removeClass('valid2');
		txtRepw.addClass('error2');
		txtRepw.text('password mismatched');
	}
	else{
		repw.removeClass('error1');
		repw.addClass('valid1');
		txtRepw.removeClass('error2');
		txtRepw.addClass('valid2');
		txtRepw.text('password matched');
	}
}
repw.keyup(matchpassword);
});
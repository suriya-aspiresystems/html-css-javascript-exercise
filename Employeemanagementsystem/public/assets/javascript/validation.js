var button = document.getElementById('btn');
button.addEventListener('click',function(event){
    event.preventDefault();
    checkEmail();
    Checkpassword();
});
function checkEmail() {
    var uemail =  document.getElementById('email').value;
    var uemail_err = document.getElementById('emailerr');
    var emailPattern = /^([a-zA-Z0-9]){5,}@([a-z]){5}.(com)$/;
    if(!emailPattern.test(uemail)){
        uemail_err.innerHTML = "Invalid Email";
        uemail_err.style.backgroundColor = "red";
        uemail_err.style.color = "white";
        uemail_err.style.fontStyle = "italic"
        uemail_err.style.fontWeight = "bold";
        uemail_err.style.border = "2px solid black";
    }else{
        uemail_err.style.display = "none";
    }
}
function Checkpassword() {
    var upass = document.getElementById('password').value;
    var upass_err = document.getElementById('passworderr');
    var passPattern = /^([a-z0-9]){6,}$/;
    if(!passPattern.test(upass)){
        upass_err.innerHTML = "Invalid Password";
        upass_err.style.backgroundColor = "red";
        upass_err.style.color = "white";
        upass_err.style.fontStyle = "italic";
        upass_err.style.fontWeight = "bold";
        upass_err.style.border = "2px solid white";
    }else{
        upass_err.style.display = "none";
    }
}

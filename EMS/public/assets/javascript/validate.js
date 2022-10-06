function emailValid()
{
    var email = document.getElementById('email').value;
    var email_error = document.getElementById('emailerror');
    var emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(!email.match(emailPattern)){
        email_error.innerHTML = "Invalid Email";
        email_error.style.backgroundColor = "red";
        email_error.style.color = "white";
        email_error.style.fontStyle = "italic";
        email_error.style.fontWeight = "bold";
        email_error.style.border = "2px solid black";
    } else{
        email_error.display="none";
    }
}

function passwordValid() {
    var password = document.getElementById('password').value;
    var password_error = document.getElementById('passworderror');
    var passwordPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
    if(!password.match(passwordPattern)){
        password_error.innerHTML = "Invalid Password";
        password_error.style.backgroundColor = "red";
        password_error.style.color = "white";
        password_error.style.fontStyle = "italic";
        password_error.style.fontWeight = "bold";
        password_error.style.border = "2px solid white";
    }else{
        password_error.style.display = "none";
    }
}

var button = document.getElementById('btn');
button.addEventListener('click',function(event) {
    event.preventDefault();
    emailValid();
    passwordValid();
});
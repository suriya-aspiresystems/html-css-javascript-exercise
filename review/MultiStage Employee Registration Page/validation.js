function next_step1() {
document.getElementById("first").style.display = "none";
document.getElementById("second").style.display = "block";

}

function fprev() {
	document.getElementById('first').style.display='block';
	document.getElementById('second').style.display='none';
	document.getElementById('third').style.display='none';
 	document.getElementById('fourth').style.display='none';
	document.getElementById('fifth').style.display='none';
}
function fnext() {
	document.getElementById('first').style.display='none';
	document.getElementById('second').style.display='none';
	document.getElementById('third').style.display='block';
	document.getElementById('fourth').style.display='none';
	document.getElementById('fifth').style.display='none';
}
function thirdNext() {
	document.getElementById('first').style.display='none';
	document.getElementById('second').style.display='none';
	document.getElementById('third').style.display='none';
	document.getElementById('fourth').style.display='block';
	document.getElementById('fifth').style.display='none';
}
function tprev() {
	document.getElementById('first').style.display='none';
	document.getElementById('second').style.display='block';
	document.getElementById('third').style.display='none';
	document.getElementById('fourth').style.display='none';
	document.getElementById('fifth').style.display='none';
}
function fNext(){
	document.getElementById('first').style.display='none';
	document.getElementById('second').style.display='none';
	document.getElementById('third').style.display='none';
	document.getElementById('fourth').style.display='none';
	document.getElementById('fifth').style.display='block';
}
function fPrev(){
	document.getElementById('first').style.display='none';
	document.getElementById('second').style.display='none';
	document.getElementById('third').style.display='block';
	document.getElementById('fourth').style.display='none';
	document.getElementById('fifth').style.display='none';
}
function Prev(){
	document.getElementById('first').style.display='none';
	document.getElementById('second').style.display='none';
	document.getElementById('third').style.display='none';
	document.getElementById('fourth').style.display='block';
	document.getElementById('fifth').style.display='none';
}
var count = 0; // To count blank fields.
function validation(event) {
var radio_check = document.getElementsByName('gender'); // Fetching radio button by name.
var input_field = document.getElementsByClassName('text_field'); // Fetching all inputs with same class name text_field and an html tag textarea.
var text_area = document.getElementsByTagName('textarea');
// Validating radio button.
if (radio_check[0].checked == false && radio_check[1].checked == false) {
var y = 0;
} else {
var y = 1;
}
// For loop to count blank inputs.
for (var i = input_field.length; i > count; i--) {
if (input_field[i - 1].value == '' || text_area.value == '') {
count = count + 1;
} else {
count = 0;
}
}
if (count != 0 || y == 0) {
alert("*All Fields are mandatory*"); // Notifying validation
event.preventDefault();
} else {
return true;
}
}
const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');
const number=document.getElementById('number');
form.addEventListener('submit',(event)=>{
   
    validateForm();
    validateNumber();
    if(isFormValid()==true){
      form.submit();
    }else{
       event.preventDefault();
    }
});
// prevent submit form even one field is not valid
function isFormValid(){
  const inputContainers=form.querySelectorAll('.input-group');
  let result=true;
  inputContainers.forEach((container)=>{
    if(container.classList.contains('error')){
      result=false;
    }
  });
  return result;

}
// To validate Form fields
function validateForm() {
  //email
   if(email.value.trim()==''){
    setError(email,'Provide Email Address');
   }
   else if(isValidEmail(email.value)){
      setSuccess(email);
   }
   else{
    setError(email,'Provide a Valid Email Address');
   }
     //password
   if(password.value.trim()==''){
    setError(password,'Password cannot be Empty');
   }
   else if(password.value.trim().length<6||password.value.trim().length>20){
    setError(password,'Password Must be Between 6 and 20 characters');
   }
   else{
     setSuccess(password);
   }

   //confirm password
   if(password2.value.trim()==''){
    setError(password2,'Password Cannot be Empty');
   }
   else if(password2.value!==password.value){
     setError(password2,'Password Does Not Match');
   }
   else{
    setSuccess(password2);
   }
   if(username.value.trim()==''){
     setError(username,'Name cannot be Empty');
   }
   else if(username.value.trim().length<5||username.value.trim().length>15){
      setError(username,'Name must between min 5 and max 15 Characters');
   }
   else{
    setSuccess(username);
   }
  
 
}
  const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
function validateNumber(){
  if(number.value.trim()==''){
    setError(number,'Provide Valid Number');
   }
   else if(isValidNumber(number.value)){
      setSuccess(number);
   }
   else{
    setError(number,'Provide a Valid Number');
   }
}

const isValidNumber = number=>{
	const phoneNo = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
    return phoneNo.test(String(number));
}
function setError(element,errorMessage){
  const parent=element.parentElement;
  if(parent.classList.contains('success')){
    parent.classList.remove('success');
  }
  parent.classList.add('error');
  const paragraph=parent.querySelector('p');
  paragraph.textContent=errorMessage;
}
function setSuccess(element){
  const parent=element.parentElement;
  if(parent.classList.contains('error')){
    parent.classList.remove('error');
  }
  parent.classList.add('success');
  // const paragraph=parent.querySelector('p');
  // paragraph.textContent=successMessage;
}




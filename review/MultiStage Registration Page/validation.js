function nextTab(event) {
    var parent = event.target.parentElement;
    parent.classList.remove('active');
    parent.nextElementSibling.classList.add('active');
}
    
function previousTab(event) {
    var parent = event.target.parentElement;
    parent.classList.remove('active');
    parent.previousElementSibling.classList.add('active');
}
    
    var form = document.getElementById('next_btn1');
    var email = document.getElementById('email');
    email.oninput = (event) => {
        validations(event.target,/^[A-Za-z.0-9]{2,}@[a-z]{2,}\.[a-z]{2,}$/,'Invalid email');
    };
    var password = document.getElementById('password');
    password.oninput = (event) => {
        validations(event.target,  /^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[!@#$%^&*])[A-Za-z0-9!@#$%^&*]{6,16}$/,'Invalid password');
    };  
    var confirmPassword = document.getElementById('ConfirmPassword');
    confirmPassword.oninput = (event) => {
        var parent=event.target.parentElement;
        if(password.value == event.target.value){
             event.target.nextElementSibling.textContent = '';
             parent.classList.add('success');
        }
        else{
            displayMessage(event.target,'Both passwords must be same');
            if(parent.classList.contains('success')){
                parent.classList.remove('success');
            }
            parent.classList.add('error');
        }
    }
    var username = document.getElementById('username');
    username.oninput = (event) => {
        validations(event.target,/^[A-za-z]{5,}$/,'Invalid name');
    }
    function validations(element,pattern,message)
    {
        var parent= element.parentElement;
        if(pattern.test(element.value)){
            
            element.nextElementSibling.textContent = '';
            parent.classList.add('success');
            
        }
        else{
            displayMessage(element,message);
            if(parent.classList.contains('success')){
               parent.classList.remove('success');
             }
             parent.classList.add('error');
        }

    }
    
    function displayMessage(element,message)
    {
        element.nextElementSibling.textContent = message;
    }
    
     next_btn1.onclick = (event) => {
        var inputFields = document.getElementsByClassName('text_field');
         var flag = true;
         var flag1 = true;
        for(index=0;index<inputFields.length;index++)
        {
            var alertBox = document.getElementsByClassName('alertbox');
            for(j=0;j<alertBox.length;j++)
            {
                if(alertBox[j].textContent)
                {
                    flag1 = false;
                    break;
                }
            }
            if(inputFields[index].value=='')
            {
                flag=false;
                inputFields[index].nextElementSibling.textContent = 'Please fill this field';
            }
            flag = flag && flag1;
        }
        if(flag){
           nextTab(event);
        }
    }
    date.oninput=(event)=>{
        var date=event.target.value;//date in String
        var dateFormat=new Date(date);//date in date
        var currentDate=new Date();
        var dateDiff=currentDate.getFullYear()-dateFormat.getFullYear();
        var parent = event.target.parentElement;
        if(dateDiff>=18 && dateDiff<=60){
            event.target.nextElementSibling.textContent = '';
            parent.classList.add('success');
        }
        else{
            displayMessage(event.target,"Age Should be between 18 to 60");
            if(parent.classList.contains('success')){
                parent.classList.remove('success');
            }
            parent.classList.add('error');
        }
    }
    var number=document.getElementById('number');
    number.oninput = (event) => {
        validations(event.target,/^[6789][0-9]{9}$/,'Invalid Mobile Number');
    };
  
    next.onclick = (event) => {
        var inputFields = document.getElementsByClassName('input2');
        var flag = true;
        var isChecked = false;
        var flag1 = true;
        for(index=0;index<inputFields.length;index++)
        {
            var radio = document.getElementsByName('gender');
            var parent = radio[0].parentElement;
            for(i=0;i<radio.length;i++)
            {
                if(radio[i].checked)
                {
                    isChecked = true;
                    break;
                }
            }
            var alertBox = document.getElementsByClassName('alertbox1');
            for(j=0;j<alertBox.length;j++)
            {
                if(alertBox[j].textContent && alertBox[j].textContent == 'Please fill in this field')
                {
                    flag1 = false;
                    break;
                }
            }
            if(!isChecked){
                parent.lastElementChild.textContent = 'Please fill in this field';

            }
            else{
                parent.lastElementChild.textContent='';
            }

            if(inputFields[index].value=='' || inputFields[index].selectedIndex == '0')
            {
                flag=false;
                inputFields[index].nextElementSibling.textContent = 'Please fill this field';
            }
            flag = flag && isChecked && flag1;
        }
        if(flag)
        {
           nextTab(event);
        }
    }
    next_btn3.onclick = (event) =>{
        var inputFields=document.getElementsByClassName('input_text');
        var flag=true;
        for(i=0;i<inputFields.length;i++){
            if(inputFields[i].value=='' || inputFields[i].selectedIndex=='0')
            {
                flag=false;
                inputFields[i].nextElementSibling.textContent = 'Please fill this field';
            }
            else
            {
                inputFields[i].nextElementSibling.textContent = '';
            }
        }
        if(flag){
            nextTab(event);         
        }
        
    }
btn.onclick = (event) => {
    var flag = true;
    if(document.getElementById('practice').selectedIndex!='0')
    {
        document.getElementById('practice').nextElementSibling.textContent = '';
    }
    else
    {
        document.getElementById('practice').nextElementSibling.textContent = 'Please fill in this field';
        flag = false;
    }
    if(document.getElementById('check').checked)
    {
        document.getElementById('check').nextElementSibling.textContent = '';
    }
    else
    {
        document.getElementById('check').nextElementSibling.textContent = 'Please fill in this field';
        flag = false;
    }
    if(flag)
    {
        console.log(document.getElementById('form'));
        document.getElementById('form').submit();
    }
}
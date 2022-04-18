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
        document.getElementById('second').style.display='none';
        document.getElementById('third').style.display='block';
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
    var form = document.getElementById('next_btn1');
    var username = document.getElementById('username');
    var email = document.getElementById('email');
    var password = document.getElementById('password');
    var password2 = document.getElementById('pass');
    const number=document.getElementById('number');
   
    email.onchange = (event) => {
        validations(event.target,/^[A-Za-z.0-9]{2,}@[a-z]{2,}\.[a-z]{2,}$/,'Invalid email');
    };
    
    password.onchange = (event) => {
        validations(event.target,/[A-Z]{1,}[a-z]{6,}[0-9]{1,}/,'Invalid password');
    };
    
    password2.onchange = (event) => {
        if(password.value == event.target.value)
            event.target.nextElementSibling.textContent = '';
        else
        {
            displayMessage(event.target,'Both passwords must be same');
        }
    }
    
    username.onchange = (event) => {
        validations(event.target,/^[A-za-z]{5,}$/,'Invalid name');
    }
    function validations(element,pattern,message)
    {
        if(pattern.test(element.value))
            element.nextElementSibling.textContent = '';
        else
        {
            displayMessage(element,message);
        }
    }
    
    function displayMessage(element,message)
    {
        element.nextElementSibling.textContent = message;
        element.value='';
    }
    
    next_btn1.onclick = () => {
        var inputFields = document.getElementsByClassName('text_field');
        var flag = true;
        for(index=0;index<inputFields.length;index++)
        {
            if(inputFields[index].value=='')
            {
                flag=false;
                inputFields[index].nextElementSibling.textContent = 'Please fill this field';
            }
        }
        if(flag)
        next_step1();
    }
    date.onchange=(event)=>{
        var date=event.target.value;//date in String
        var dateFormat=new Date(date);//date in date
        var currentDate=new Date();
        var dateDiff=currentDate.getFullYear()-dateFormat.getFullYear();
        if(dateDiff>=18 && dateDiff<=60){
            event.target.nextElementSibling.textContent = '';
        }
        else{
            displayMessage(event.target,"Age Should be between 18 to 60");
        }

    }
    number.onchange = (event) => {
        validations(event.target,/^[6789][0-9]{9}$/,'Invalid Mobile Number');
    };
  
    
    function validations(element,pattern,message)
    {
        if(pattern.test(element.value))
            element.nextElementSibling.textContent = '';
        else
        {
            displayMessage(element,message);
        }
    }
    
    function displayMessage(element,message)
    {
        element.nextElementSibling.textContent = message;
        element.value='';
    }
    next.onclick = () => {
        var inputFields = document.getElementsByClassName('input2');
        var flag = true;
        var isChecked = false;
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
            if(!isChecked)
                parent.lastElementChild.textContent = 'Please fill in this field';

            if(inputFields[index].value=='' || inputFields[index].selectedIndex == '0')
            {
                flag=false;
                inputFields[index].nextElementSibling.textContent = 'Please fill this field';
            }
            flag = isChecked;
        }
        if(flag)
        {
           fnext();
        }
    }
    next_btn3.onclick = () =>{
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
            fNext();
        }
        
    }
    check.onclick = (event) => {
        var practice = document.getElementById('practice');
        if(practice.selectedIndex == '0')
        {
            event.target.checked = false;
            practice.nextElementSibling.textContent = 'Please fill in this field';
        }
        else
            practice.nextElementSibling.textContent = '';
        if(event.target.checked)
        {
            document.getElementById('btn').disabled = false;
        }
        else
        {
            document.getElementById('btn').disabled = true;
        }
    }
  

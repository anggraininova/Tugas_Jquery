const form=document.getElementById('form');
const first_name=document.getElementById('first_name');
const last_name=document.getElementById('last_name');
const email=document.getElementById('email');
const password=document.getElementById('phone');
const password2=document.getElementById('address');


//Show input error message

function showError(input,message){
    const formControl=input.parentElement;
    formControl.className='form-control error';
    const small=formControl.querySelector('small');
    small.innerText=message;
}

function showSuccess(input){
    const formControl=input.parentElement;
    formControl.className='form-control success';
    
}

//Email

function isValidEmail(email)
{
    const re= /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}





form.addEventListener('submit',function(e){
    e.preventDefault();

    if(first_name.value===''){
        showError(first_name,'First_Name is required');
    }
    else{
        showSuccess(first_name);
    }
    if(last_name.value===''){
        showError(last_name,'Last_Name is required');
    }
    else{
        showSuccess(last_name);
    }
    if(email.value===''){
        showError(email,'Email is required');
    }else if(!isValidEmail(email.value)){
        showError(email,'Email is not valid');
    }
    else{
        showSuccess(email);
    }

    if(phone.value===''){
        showError(phone,'Phone is required');
    }
    else{
        showSuccess(phone);
    }
    if(address.value===''){
        showError(address,'address is required');
    }
    else{
        showSuccess(address);
    }

    
});





//sign in

function validate() {
    const psw=document.getElementById("Password").value;
    const email = document.getElementById("username").value;
    if(email==""){
        document.getElementById("confirmEmail2").setAttribute("style","display:bloc;color:red;");
        document.getElementById("confirmEmail").setAttribute("style","display:none;");
    }
    else if (checkEmail(email)) {    
        document.getElementById("confirmEmail").setAttribute("style","display:none;");
        document.getElementById("confirmEmail2").setAttribute("style","display:none;");
    } else {      
        document.getElementById("confirmEmail").setAttribute("style","display:bloc;color:red;");
        document.getElementById("confirmEmail2").setAttribute("style","display:none;");
    }
    if(psw==""){
        document.getElementById("confirmpsw").setAttribute("style","display:bloc;color:red;");
    }else{
        document.getElementById("confirmpsw").setAttribute("style","display:none;");
    } 
    return false;
}


//sign Up

const fname=document.getElementById("fname");
const lname=document.getElementById("lname");
const uname=document.getElementById("uname");
const pwd=document.getElementById("Password");
const conpwd=document.getElementById("confirmpass");
const form=document.getElementById("myF");

function validateInput(ev){
    //check name
    if(fname.value.trim()===""){
        onError(fname,"First name cannot be empty!");
        ev.preventDefault();
    }
    else{
        onSuccess(fname);
    }
    if(lname.value.trim()===""){
        onError(lname,"Last name cannot be empty!");
        ev.preventDefault();
    }
    else{
        onSuccess(lname);
    }
    //email
    if(uname.value.trim()===""){
    onError(uname,"Email cannot be empty!")
    ev.preventDefault();
    }else{
        if(!isValidEmail(uname.value.trim())){
            onError(uname,"Email is not valid")
            ev.preventDefault();
        }else{
            onSuccess(uname);
        }
    }
    //psw
    if(pwd.value.trim()===""){
        onError(pwd,"Password cannot be empty!");
        ev.preventDefault();
    }
    else{
        onSuccess(pwd);
    }
    if(conpwd.value.trim()===""){
        onError(conpwd,"Confirm Password cannot be empty!");
        ev.preventDefault();
    }
    else{
        if(pwd.value.trim()!==conpwd.value.trim()){
        onError(conpwd,"Password and Confirm Password not matching")
        ev.preventDefault();
        }else
        onSuccess(conpwd);
    }
}
 

document.querySelector("form").addEventListener("submit",(e)=>{
    validateInput(e);
});

function onSuccess(input){
    let parent=input.parentElement;
    let messageEl=parent.querySelector("small");
    messageEl.style.visibility="hidden";
    messageEl.innerText="";
}
function onError(input,message){
    let parent=input.parentElement;
    let messageEl=parent.querySelector("small");
    messageEl.style.visibility="visible";
    messageEl.style.color="red";
    messageEl.innerText=message;
}

function isValidEmail(email){
    return /^\w+@\w+(.\w+){1,3}$/.test(email); 
}





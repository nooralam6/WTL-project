function checkName(e) {
    var element=e.target;
    var mssg=document.getElementById('Error1');
     var mssg1=document.getElementById('valid1');
     var mssg0=document.getElementById('default1');
   if(/[^a-zA-Z ]/.test(element.value)) {              //space is also under consideration before
       element.value="";
       mssg1.textContent="";
       mssg0.textContent="";
       mssg.textContent="*Only charters between A to z are allowed.";
       return false;  
   }
    if (element.value.length < 2) {
        element.value = "";
        mssg1.textContent="";
        mssg0.textContent="";
         mssg.textContent="*Minimum 2 alphabets are required.";
        return false;
    }
     mssg.textContent="";
     mssg0.textContent="";
     mssg1.textContent="*Valid Name has been used.";
      return true;
}

function checkUname(e){
       var element=e.target;
        var mssg0=document.getElementById('default2');
       var mssg=document.getElementById('Error2');
        var mssg1=document.getElementById('valid2');
    if (element.value.length < 3) {
        element.value = "";
        mssg0.textContent="";
        mssg1.textContent="";
        mssg.textContent="*Minimum 3 alphabets are required.";
        return false;
    }
    mssg0.textContent="";
    mssg.textContent="";
    mssg1.textContent="*Valid Userame.";
      return true;
}

function checkPass(e){
   var element=e.target;
    var mssg0=document.getElementById('default3');
   var mssg=document.getElementById('Error3');
   var mssg1=document.getElementById('valid3');
   if (element.value.length < 8) {
        element.value = "";
        mssg0.textContent="";
        mssg1.textContent="";
          mssg.textContent="*Minimum 8 charters are required.";
        return false;
    }
    mssg0.textContent="";
    mssg.textContent="";
    mssg1.textContent="*Password can be used.";
      return true;
}

function checkCpass(e){
   var element=e.target;
    var element1=document.getElementById('password');
    var mssg0=document.getElementById('default4');
   var mssg=document.getElementById('Error4');
   var mssg1=document.getElementById('valid4');
   if (element.value.length < 8) {
        element.value = "";
        mssg0.textContent="";
        mssg1.textContent="";
          mssg.textContent="*Minimum 8 charters are required.";
        return false;
    }
    if(element.value != element1.value ){
    element.value = "";
    mssg1.textContent="";
    mssg0.textContent="";
    mssg.textContent="*Password  does not Match.";
    return false;
    }
    mssg.textContent="";
    mssg0.textContent="";
    mssg1.textContent="*Password Matched.";
     return true;    
}
function checkEmail(e){
    var element=e.target;
     var mssg0=document.getElementById('default5');
    var mssg=document.getElementById('Error5');
     var mssg1=document.getElementById('valid5');
    if(element.value.length>100){
        element.value="";
        mssg0.textContent="";
        mssg1.textContent="";
         mssg.textContent="*Too big email id.";
        return false;
}
    if(/[^.@_a-zA-Z0-9]/.test(element.value)){
      element.value="";
      mssg0.textContent="";
      mssg1.textContent="";
         mssg.textContent="*Invalid! charcter used.";
        return false;
    }
     if(!/[@]/.test(element.value)){
          element.value="";
        mssg1.textContent="";
          mssg0.textContent="";
          mssg.textContent="* '@' missing.";
        return false;
     }
     if(!/[.]/.test(element.value)){
          element.value="";
          mssg1.textContent="";
          mssg0.textContent="";
          mssg.textContent="*DOT . missing.";
        return false;
     }
      if(!/[a-zA-Z0-9]/.test(element.value)){
          element.value="";
          mssg0.textContent="";
          mssg1.textContent="";
          mssg.textContent="*Alphabets and numbers are missing.";
        return false;
     }
     mssg0.textContent="";
     mssg.textContent="";
     mssg1.textContent="*Correct Format of email has been used.";
    return true;
    
}

function checkMobile(e){
   var element=e.target;
    var mssg0=document.getElementById('default6');
   var mssg=document.getElementById('Error6');
    var mssg1=document.getElementById('valid6');
   if(/[^0-9]/.test(element.value)){
    element.value="";
    mssg0.textContent="";
    mssg1.textContent="";
    mssg.textContent="*Use only numbers.";
    return false;
  }
   if(!/[0-9]/.test(element.value)){
    element.value="";
    mssg0.textContent="";
    mssg1.textContent="";
    mssg.textContent="*Numbers are missing.";
    return false;
   }
   if (element.value.length<10 || element.value.length>11 ) {
        element.value = "";
        mssg0.textContent="";
        mssg1.textContent="";
         mssg.textContent="*10 digits are required.";
        return false;
    }
    mssg0.textContent="";
    mssg.textContent="";
    mssg1.textContent="*Valid mobile number.";    
     return true;    
}




var fname=document.getElementById("fname");
var uname=document.getElementById("uname");
var pass=document.getElementById("password");
var cpass=document.getElementById("cpass");
var email=document.getElementById("email");
var mobile=document.getElementById("mobile");

fname.addEventListener('blur',checkName,false);
uname.addEventListener('blur',checkUname,false);
pass.addEventListener('blur',checkPass,false);
cpass.addEventListener('blur',checkCpass,false);
email.addEventListener('blur',checkEmail,false);
mobile.addEventListener('blur',checkMobile,false);



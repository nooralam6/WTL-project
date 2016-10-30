function checkUname(e){
       var element=e.target;
//        var mssg0=document.getElementById('default2');
       var mssg=document.getElementById('Error1');
//        var mssg1=document.getElementById('valid1');
    if (element.value.length < 3) {
        element.value = "";
//        mssg0.textContent="";
//        mssg1.textContent="";
        mssg.textContent="*Minimum 3 alphabets are required.";
        return false;
    }
//    mssg0.textContent="";
    mssg.textContent="";
//    mssg1.textContent="*Username can be used.";
      return true;
}

function checkPass(e){
   var element=e.target;
//    var mssg0=document.getElementById('default3');
   var mssg=document.getElementById('Error2');
//   var mssg1=document.getElementById('valid2');
   if (element.value.length < 8) {
        element.value = "";
//        mssg0.textContent="";
//        mssg1.textContent="";
          mssg.textContent="*Minimum 8 charters are required.";
        return false;
    }
//    mssg0.textContent="";
    mssg.textContent="";
//    mssg1.textContent="*Password can be used.";
      return true;
}

var uname=document.getElementById("uname");
var pass=document.getElementById("password");


uname.addEventListener('blur',checkUname,false);
pass.addEventListener('blur',checkPass,false);
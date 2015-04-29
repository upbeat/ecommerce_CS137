function validateForm(){
    var feedbackObj = document.getElementById("feedback");
    var name = feedbackObj.name.value;
    var phone = feedbackObj.phone.value;
    var title = feedbackObj.title.value;
    var email = feedbackObj.email.value;
    var everythingOK = true;

    if (!validateName(name)){
      alert("Invalid name.");
      everythingOK = false;
    }
    if (!validatePhone(phone)){
      alert("Invalid phone number");
      everythingOK = false;
    }
    if (!validateEmail(email)){
      alert("Invalid email address");
      everythingOK = false;
    }
    /*if (!validateName(title)){
      alert("Invalid book title");
      everythingOK = false;
    }*/
    if (everythingOK){
      alert("Feedback Submitted. Thank You!");
      return true;
    }
    else
       return false;
}

function validateName(name){
  var p = name.search(/^[-'\w\s]+$/);
  if (p==0)
    return true;
  else
    return false;
}

function validatePhone(phone){
  var p1 = phone.search(/^\d{3}[-\s]{0,1}\d{3}[-\s]{0,1}\d{4}$/);
  var p2 = phone.search(/^\d{3}[-\s]{0,1}\d{4}$/);
  if (p1 == 0 || p2 == 0)
    return true;
  else
    return false;
}

function validateEmail(address){
  var p = address.search(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})$/);
  if (p==0)
    return true;
  else
    return false;
}

function validateEmail(address){
  var p = address.search(/.+@.+/);
  if (p==0)
    return true;
  else
  {
    alert("bad email");
    return false;
  }
}

function validateForm(){
    var feedbackObj = document.getElementById("feedback");
    var name = feedbackObj.name.value;
    var email = feedbackObj.email.value;
    var everythingOK = true;

    if (!validateName(name)){
      alert("Invalid name.");
      everythingOK = false;
    }
    if (!validateEmail(email)){
      alert("Invalid email address");
      everythingOK = false;
    }
    if (everythingOK){
      // Find which book was selected
      var e = document.getElementById("bookPick");
      var strUser = e.options[e.selectedIndex].text;

      var checkbox_checked = document.getElementById("thisDiscount").checked;

      if (checkbox_checked == true) { // take 50% off
        alert("Order Submitted. Thank You! \n" + "Book selected: " + strUser + "\nTotal Cost: $5");
        return true;
      }
      else {
        alert("Order Submitted. Thank You! \n" + "Book selected: " + strUser + "\nTotal Cost: $10");
        return true;
      }
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

function validateEmail(address){
  var p = address.search(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})$/);
  if (p==0)
    return true;
  else
    return false;
}

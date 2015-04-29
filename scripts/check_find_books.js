function processForm(){
    var findObj = document.getElementById("find");
    var name = findObj.name.value;
    var email = findObj.email.value;
    var everythingOK = true;
    var message = "";
    var normalCost = 0;
    var clearanceCost = 0;
    var totalCost = 0;


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
      var bookNormal = document.getElementById("bookPickNormal");
      var bookNormalTitle = bookNormal.options[bookNormal.selectedIndex].text;

      var bookClearance = document.getElementById("bookPickClearance");
      var bookClearanceTitle = bookClearance.options[bookClearance.selectedIndex].text;

      var normalQuantity = findObj.normalQuantity.value;
      var clearanceQuantity = findObj.clearanceQuantity.value;

      switch(bookNormal.value) {
        case "1":
          normalCost = 11;
          break;

        case "2":
        case "3":
          normalCost = 12;
          break;

        case "4":
        case "5":
          normalCost = 7;
          break;
      }

      switch(bookClearance.value) {
        case "1":
        case "2":
          clearanceCost = 2;
          break;

        case "3":
          clearanceCost = 1;
      }

      var checkbox_checked = document.getElementById("thisDiscount").checked;


      //calculate total
      normalCost *= normalQuantity;
      clearanceCost *= clearanceQuantity;
      totalCost = normalCost + clearanceCost;

      if (checkbox_checked == true) { // take 50% off
        totalCost /= 2;
        alert("Order Submitted with discount. Thank You! \n" + "Purchased:\n" +
              bookNormalTitle +  "\n Quantity: " + normalQuantity.toString() + " " +
              "Cost: " + normalCost.toString() +"\n" +
              bookClearanceTitle + "\n Quantity: " + clearanceQuantity.toString() + " " +
              "Cost: " + clearanceCost.toString() +"\n" +
              "\n\nDiscounted Total Cost: $" + totalCost.toString());
        return true;
      }

      alert("Order Submitted. Thank You! \n" + "Purchased:\n" +
            bookNormalTitle +  "\n Quantity: " + normalQuantity.toString() + " " +
            "Cost: $" + normalCost.toString() +"\n" +
            bookClearanceTitle + "\n Quantity: " + clearanceQuantity.toString() + " " +
            "Cost: $" + clearanceCost.toString() +"\n" +
            "\n\nTotal Cost: $" + totalCost.toString());
      return true;

    }
    else
       return false;
}

function showTotal(){

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

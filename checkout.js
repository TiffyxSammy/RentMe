function validateForm() {
    var flag = true;
    var x = document.forms["form"]["fName"].value;
    if (x.length == 0) {
        alert("Full Name cannot be empty.");
        flag= false;
        return false;
    }
    x = document.forms["form"]["email"].value;
    if(!x.includes("@")){
        alert("Email is invalid.");
        flag= false;
        return false;
    }
    x = document.forms["form"]["address"].value;
    if (x.length == 0) {
        alert("Street address cannot be empty.");
        flag= false;
        return false;
    }
    x = document.forms["form"]["city"].value;
    if (x.length == 0) {
        alert("City cannot be empty.");
        flag= false;
        return false;
    }
    x=document.forms["form"]["state"].value;
    if(x.length !=2){
        alert("State must be 2 letters.");
        flag= false;
        return false;
    }
    x = document.forms["form"]["zip"].value;
    if (x.length != 5) {
        alert("Zipcode must be five digits.");
        flag= false;
        return false;
    }
    x = document.forms["form"]["cName"].value;
    if (x.length == 0) {
        alert("Cardholder Name cannot be empty.");
        flag= false;
        return false;
    }
    x = document.forms["form"]["phone"].value;
    if (x.length != 10) {
        alert("Invalid phone number.");
        flag= false;
        return false;
    }
    x = document.forms["form"]["card"].value;
    if (x.length != 16) {
        alert("Invalid card number.");
        flag= false;
        return false;
    }
    x=document.forms["form"]["expYear"].value;
    if(x < 2020){
        alert("Expiration year must be 2020 or greater.");
        flag= false;
        return false;
    }
    x=document.forms["form"]["cvv"].value;
    if(x.length != 3){
        alert("CVV must be 3 numbers.");
        flag= false;
        return false;
    }
    if(flag == true){
        document.getElementById("form").submit();
        alert("Thank you for your money. We are not sending anything :) Have a good day!")
    }
}

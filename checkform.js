function validate(userForm) {
    div = document.getElementById("emailmsg");
    div.style.color = "red";
    if(div.hasChildNodes()) {
        div.removeChild(div.firstChild);
    }
    regex = /(^\w+\@\w+\.\w+)/;
    match = regex.exec(userForm.emailaddress.value);
    if(!match) {
        div.appendChild(document.createTextNode("Invalid Email"));
        userForm.emailaddress.focus();
        return false;
    }
    div = document.getElementById("passwdmsg");
    div.style.color = "red";
    if(div.hasChildNodes) {
        div.removeChild(div.firstChild);
    }
    if(userForm.password.value.length <= 5) {
        div.appendChild(document.createTextNode("The password should be at least 6 letters"));
        userForm.password.focus();
        return false;
    }
    div = document.getElementById("repasswdmsg");
    div.style.color = "red";
    if(div.hasChildNodes()) {
        div.removeChild(div.firstChild);
    }
    if(userForm.password.value != userForm.repassword.value) {
        div.appendChild(document.createTextNode("Password do not match the previous one"));
        userForm.password.focus();
        return false;
    }
    var div = document.getElementById("usrmsg");
    div.style.color = "red";
    if(div.hasChildNodes) {
        div.removeChild(div.firstChild);
    }
    if(userForm.complete_name.value.length ==0) {
        div.appendChild(document.createTextNode("This field is required and cannot be left empty"));
        userForm.complete_name.focus();
        return false;
    }
    return true;
}
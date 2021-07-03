function checkPassword(form) {
    password1 = form.psw.value;
    password2 = form.pswrepeat.value;
    var passLen = document.getElementById("psw1").value.length
    if (password1 != password2) {
        alert("\nPassword did not match: Please try again")
        document.getElementById("psw1").value = "";
        document.getElementById("psw2").value = "";

        return false;

    } else if (passLen < 6) {
        alert("password must contain atleast 6 characters")
        document.getElementById("psw1").value = "";
        document.getElementById("psw2").value = "";
        return false;
    }

}


function ClearFields() {

    document.getElementById("email").value = "";
    document.getElementById("psw1").value = "";
    document.getElementById("psw2").value = "";
}

function Revert() {
    var sign = document.getElementById("sign1");
    var login = document.getElementById("login1");
    var but_ton = document.getElementsByClassName("login_btn");
    onclick("but_ton") = sign.style.color = "#ffffff";
}

function verify() {
    document.getElementById("loginEmail").value = "";
    alert("emplty");
}

function truncateText(selector, maxLength) {
    var element = document.querySelector(selector),
        truncated = element.innerText;

    if (truncated.length > maxLength) {
        truncated = truncated.substr(0, maxLength) + '...';
    }
    return truncated;
}

document.getElementById('p').innerText = truncateText('p', 200);
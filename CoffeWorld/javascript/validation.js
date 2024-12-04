function validateForm() {
    let isValid = true;
    const form = document.forms["myForm"];
    const name = form["name"].value;
    const email = form["email"].value;
    const message = form["message"].value;

    if (name === "") {
        alert("Name must be filled out");
        isValid = false;
    }

    if (email === "") {
        alert("Email must be filled out");
        isValid = false;
    } else if (!validateEmail(email)) {
        alert("Invalid email format");
        isValid = false;
    }

    if (message === "") {
        alert("Message must be filled out");
        isValid = false;
    }

    return isValid;
}

function validateEmail(email) {
    atpos = email.indexOf("@");
    dotpos = email.lastIndexOf(".");
    if (atpos < 1 || (dotpos - atpos < 2)) {
        return false;
    }
    return true;
}
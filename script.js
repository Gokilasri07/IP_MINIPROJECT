function validateForm() {

    let name = document.getElementById("name").value.trim();
    let email = document.getElementById("email").value.trim();
    let phone = document.getElementById("phone").value.trim();
    let gender = document.getElementById("gender").value;
    let age = document.getElementById("age").value;
    let plan = document.getElementById("plan").value;
    let date = document.getElementById("joining_date").value;

    if (name == "") {
        alert("Please enter your name");
        return false;
    }

    if (email == "") {
        alert("Please enter your email");
        return false;
    }

    if (phone.length != 10 || isNaN(phone)) {
        alert("Please enter a valid 10 digit phone number");
        return false;
    }

    if (gender == "") {
        alert("Please select gender");
        return false;
    }

    if (age < 15 || age > 70) {
        alert("Age must be between 15 and 70");
        return false;
    }

    if (plan == "") {
        alert("Please select a membership plan");
        return false;
    }

    if (date == "") {
        alert("Please select joining date");
        return false;
    }

    return true;
}
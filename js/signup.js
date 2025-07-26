function toggleMobileMenu() {
    var x = document.getElementById("mobileNav");
    x.classList.toggle("w3-show");
}

function validation() {
    const Name = document.getElementById('name').value;
    const Email = document.getElementById('email').value;
    const Password = document.getElementById('password').value;
    const Confirm_password = document.getElementById('confirm_password').value;
    const Address = document.getElementById('address').value;

    if (Name == '') {
        alert("Please Enter your Full Name");
    } else if (Email == '') {
        alert("Please Enter your Email id");
        return false;
    } else if (Password == '') {
        alert("Please Enter your Password");
        return false;
    } else if (Confirm_password == '') {
        alert("Please Enter your Confirm Password");
        return false;
    } else if (Confirm_password != Password) {
        alert("password does not match");
        return false;
    } else if (Address == '') {
        alert("Please Enter your Address");
        return false;
    }
}
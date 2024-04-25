var password = document.getElementById("password");
    var confirmPassword = document.getElementById("confirmPassword");

    function validatePassword() {
        if (password.value !== confirmPassword.value) {
            confirmPassword.classList.add("is-invalid");
            return false;
        } else {
            confirmPassword.classList.remove("is-invalid");
            return true;
        }
    }
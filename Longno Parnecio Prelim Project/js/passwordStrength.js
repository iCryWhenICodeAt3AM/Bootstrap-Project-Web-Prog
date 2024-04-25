var passwordInput = document.getElementById("password");
var passwordStrengthIndicator = document.getElementById("password-strength");

passwordInput.addEventListener("input", function () {
    var password = passwordInput.value;
    var strength = calculatePasswordStrength(password);
    displayPasswordStrength(strength);
});

function calculatePasswordStrength(password) {
    var strength = 0;

    // Length check
    if (password.length >= 8) {
        strength += 1;

        // Uppercase and lowercase letters check
        if (/[a-z]/.test(password) && /[A-Z]/.test(password)) {
            strength += 1;
        }

        // Numbers and special characters check
        if (/\d/.test(password) && /[^\w\s]/.test(password)) {
            strength += 1;
        }
    }

    return strength;
}

function displayPasswordStrength(strength) {
    var strengthText = "";
    var strengthClass = "";
    var classColor = "";
    if (strength === 0 ){
        strengthText = "Weak";
        classColor = "border-danger border-2";
    } else if (strength === 1) {
        strengthText = "Average";
        classColor = "border-warning border-2";
    } else if (strength === 2) {
        strengthText = "Strong";
        classColor = "border-info border-2";
    } else {
        strengthText = "SUPERB!";
        classColor = "border-none";
    }

    passwordStrengthIndicator.textContent = "Password Strength: " + strengthText;
    passwordInput.className = "form-control " + classColor;
}
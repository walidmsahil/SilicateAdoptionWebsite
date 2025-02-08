function validateEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; /*checking if the email adress format is correct */
    return emailRegex.test(email);
}

document.addEventListener('DOMContentLoaded', function () {
    var emailInput = document.getElementById('email');
    var emailError = document.getElementById('emailError');

    emailInput.addEventListener('input', function () {
        var emailValue = emailInput.value;
        emailError.innerHTML = '';

        if (emailValue.trim() === '') {
            emailError.innerHTML = 'Email is required';
        } else if (!validateEmail(emailValue)) {
            emailError.innerHTML = 'Please enter a valid email address in the format xxx@yyy.com.';
        }
    });
});

function validateEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; /*checking if the email address format is correct */
    return emailRegex.test(email);
}

document.addEventListener('DOMContentLoaded', function () {
    var emailInput = document.getElementById('email');
    var emailError = document.getElementById('emailError');

    emailInput.addEventListener('input', function () {
        var emailValue = emailInput.value;
        emailError.innerHTML = '';

        if (emailValue.trim() === '') {
            emailError.innerHTML = 'Email is required';
        } else if (!validateEmail(emailValue)) {
            emailError.innerHTML = 'Please enter a valid email address';
        }
    });
});

function validatePhoneNumber(phone) {
    var phoneRegex = /^[0-9 ()-.]+$/;

    return phoneRegex.test(phone);
}

document.addEventListener('DOMContentLoaded', function () {
    var phoneInput = document.getElementById('phone');
    var phoneError = document.getElementById('phoneError');

    phoneInput.addEventListener('input', function () {
        var phoneValue = phoneInput.value;
        phoneError.innerHTML = '';

        if (phoneValue.trim() === '') {
            phoneError.innerHTML = 'Phone number is required';
        } else if (!validatePhoneNumber(phoneValue)) {
            phoneError.innerHTML = 'Please enter a valid phone number.';
        }
    });
});

function validatePassword(password) {
    // This format checks if the password has at least 8 characters, including at least one uppercase letter, one lowercase letter, and one digit
    var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/;

    return passwordRegex.test(password);
}

document.addEventListener('DOMContentLoaded', function () {
    var passwordInput = document.getElementById('password');
    var passwordError = document.getElementById('passwordError');

    passwordInput.addEventListener('input', function () {
        var passwordValue = passwordInput.value;
        passwordError.innerHTML = '';

        if (passwordValue.trim() === '') {
            passwordError.innerHTML = 'Password is required';
        } else if (!validatePassword(passwordValue)) {
            passwordError.innerHTML = 'Please enter a valid password with at least 8 characters, one uppercase and lowercase letter and one digit.';
        }
    });
});



document.addEventListener("DOMContentLoaded", function () {
    var passwordField = document.getElementById("password");
    var confirmPasswordField = document.getElementById("confirm_password");
    var confirmPasswordError = document.getElementById("confirmPasswordError");

    function validatePassword() {
        if (passwordField.value !== confirmPasswordField.value) {
            confirmPasswordError.textContent = "Passwords do not match";
        } else {
            confirmPasswordError.textContent = "";
        }
    }

    passwordField.addEventListener("input", validatePassword);
    confirmPasswordField.addEventListener("input", validatePassword);
});

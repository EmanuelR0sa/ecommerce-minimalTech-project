const firstName = document.getElementById("firstName");
const lasttName = document.getElementById("lastName");
const email = document.getElementById("email");
const password = document.getElementById("password");
const retypedPassword = document.getElementById("retype-password");

const nameError = document.getElementById("nameErrorMessage");
const passError = document.getElementById("passwordErrorMessage");
const emailError = document.getElementById("emailErrorMessage");
const signupButton = document.getElementById("signupButton");


let fnameValid = false;
let lnameValid = false;
let emailValid = false;
let passwordValid = false;
let retypedPasswordValid = false;


function validateButton() {
    if (fnameValid && lnameValid && emailValid && passwordValid && retypedPasswordValid) {
        signupButton.removeAttribute("disabled");
    } else {
        signupButton.setAttribute("disabled", "");
    }
}

firstName.addEventListener('change', () => {
    let currentValue = firstName.value;

    if (currentValue.length >= 3) {
        nameError.innerText = "";
        fnameValid = true;
        firstName.classList.remove("error");

    } else {
        nameError.innerText = "Name must be > 3 characters long";
        fnameValid = false;
        firstName.classList.add("error");
    }
    validateButton();
});


lasttName.addEventListener('change', () => {
    let currentValue = lasttName.value;

    if (currentValue.length >= 3) {
        nameError.innerText = "";
        lnameValid = true;
        lasttName.classList.remove("error");

    } else {
        nameError.innerText = "Name must be > 3 characters long";
        lnameValid = false;
        lasttName.classList.add("error");
    }
    validateButton();
});




email.addEventListener('change', () => {
    let currentValue = email.value;

    if (currentValue.match(/\S+@\S+\.\S+/) ) {
        emailError.innerText = "";
        emailValid = true;
        email.classList.remove("error");

    } else {
        emailError.innerText = "You have entered an invalid email address!";
        emailValid = false;
        email.classList.add("error");
    }
    validateButton();
});




password.addEventListener('change', () => {
    let currentValue = password.value;

    if (currentValue.length >= 7 && currentValue.search(/[0-9]/) >= 0 && currentValue.search(/[A-Z]/) >= 0) {
        passError.innerText = "";
        passwordValid = true;
        password.classList.remove("error");

    } else {
        passError.innerText = "password must contain a letter, number and be >7 characters long";
        passwordValid = false;
        password.classList.add("error");
    }
    validateButton();
});

retypedPassword.addEventListener('change', () => {
    let currentValue = retypedPassword.value;

    if (currentValue === password.value) {
        retypedPasswordValid = true;
        retypedPassword.classList.remove("error");

    } else {
        retypedPasswordValid = false;
        retypedPassword.classList.add("error");
    }
    validateButton();
});
    
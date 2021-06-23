const form = document.querySelector("form");
const emailInput = form.querySelector('input[name="email"]');
const confirmedPassword = form.querySelector(`input[name="confirmedPassword"]`);

function isEmail (email){
    return /\S+@\S+.\S+/.test(email);
}

function arePasswordSame(password, confirmedPassword){
    return password === confirmedPassword;
}

function markValidation(element, condition){
    !condition ? element.classList.add('no-valid') : element.classList.remove('no-valid');
}

emailInput.addEventListener('keyup', function (){
    setTimeout()
});

confirmedPassword.addEventListener('keyup', function (){

});
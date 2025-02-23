function toggleForm(toregister){
    var loginForm = document.getElementById('login-form');
    var registerForm = document.getElementById('register-form');

    if(toregister){
        toggleIsSelected(true, loginForm, registerForm);
        registerForm.style.display = 'flex';
        loginForm.style.display = 'none';
    }else{
        toggleIsSelected(false, loginForm, registerForm);
        registerForm.style.display = 'none';
        loginForm.style.display = 'flex';
    }
}
function toggleIsSelected(registerIsClicked){
    var loginBtn = document.getElementById('login-btn');
    var registerBtn = document.getElementById('register-btn');
    if(registerIsClicked){
        loginBtn.classList.remove('isSelect');
        registerBtn.classList.add('isSelect');
    }else{
        loginBtn.classList.add('isSelect');
        registerBtn.classList.remove('isSelect');
    }
}
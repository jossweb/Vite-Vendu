function toggleForm(toregister){
    var loginForm = document.getElementById('login-form');
    var registerForm = document.getElementById('register-form');

    var loginHeader = document.getElementById('login-header');
    var registerHeader = document.getElementById('register-header');

    if(toregister){
        toggleIsSelected(true, loginForm, registerForm);

        registerForm.style.display = 'flex';
        loginForm.style.display = 'none';

        registerHeader.style.display = 'block';
        loginHeader.style.display = 'none';
    }else{
        toggleIsSelected(false, loginForm, registerForm);

        registerForm.style.display = 'none';
        loginForm.style.display = 'flex';
        
        registerHeader.style.display = 'none';
        loginHeader.style.display = 'block';
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
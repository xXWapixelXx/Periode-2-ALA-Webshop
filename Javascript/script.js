document.addEventListener('DOMContentLoaded', function() {
    var usernameInput = document.getElementById('username');
    var rememberMeCheckbox = document.getElementById('remember-me');
    var form = document.getElementById('login-form');

    // Load the username from localStorage
    if (localStorage.getItem('rememberMe') === 'true') {
        usernameInput.value = localStorage.getItem('username') || '';
        rememberMeCheckbox.checked = true;
    }

    // Save the username to localStorage when the form is submitted
    form.addEventListener('submit', function() {
        if (rememberMeCheckbox.checked) {
            localStorage.setItem('username', usernameInput.value);
            localStorage.setItem('rememberMe', 'true');
        } else {
            localStorage.removeItem('username');
            localStorage.removeItem('rememberMe');
        }
    });
});
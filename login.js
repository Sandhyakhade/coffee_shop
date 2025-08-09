document.getElementById('loginform').addEventListener('submit', function (event) {
    event.preventDefault();
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    if (email === 'user@example.com' && password === 'password123') {
        alert("Login successful welcome to go coffee");
    }
    else {
        alert("Invlaid email or password");
    }
    
})
    
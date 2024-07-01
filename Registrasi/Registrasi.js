document.getElementById('registerForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const username = document.getElementById('username').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    const errorMessage = document.getElementById('errorMessage');

    if (password !== confirmPassword) {
        errorMessage.textContent = "Passwords do not match!";
    } else {
        errorMessage.textContent = "";
        alert('Registration successful!\nUsername: ' + username + '\nEmail: ' + email);
        // Here you can add code to send the form data to the server
    }
});
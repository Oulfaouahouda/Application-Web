document.getElementById('login-form').addEventListener('submit', function(event) {
    event.preventDefault();
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    fetch('http://localhost/Application-Web-BackEnd/api/users/login.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ email, password })
    })
    .then(response => response.json())
    .then(data => {
        if (data.message === 'Login successful') {
            Swal.fire({
                icon: 'success',
                title: 'Login successful',
                text: 'You will be redirected to your profile.',
                timer: 2000
            }).then(() => {
                window.location.href = 'Profile.php'; // Redirect to the profile page
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: data.message,
                timer: 2000
            });
        }
    })
    .catch(error => {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'An error occurred while trying to login.',
            timer: 2000
        });
        console.error('Error:', error);
    });
});


document.getElementById('signup-form').addEventListener('submit', function(event) {
    event.preventDefault();
    const full_name = document.getElementById('fullName').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const country = document.getElementById('country').value;
    const city = document.getElementById('city').value;

    fetch('http://localhost/BackEnd/api/users/signup.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ full_name, email, password, country, city })
    })
    .then(response => response.json())
    .then(data => {
        if (data.message === 'User created successfully') {
            Swal.fire({
                icon: 'success',
                title: 'Signup successful',
                text: 'You will be redirected to the login page.',
                timer: 2000
            }).then(() => {
                window.location.href = 'Login.php'; // Redirect to the login page
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: data.message,
                timer: 2000
            });
        }
    })
    .catch(error => {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'An error occurred while trying to sign up.',
            timer: 2000
        });
        console.error('Error:', error);
    });
});
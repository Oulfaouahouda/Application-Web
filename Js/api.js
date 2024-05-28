document.getElementById('login-form').addEventListener('submit', function(event) {
    event.preventDefault();
    const email = document.getElementById('exampleInputEmail1').value;
    const password = document.getElementById('exampleInputPassword1').value;

    fetch('http://localhost/BackEnd/api/users/login.php', {
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
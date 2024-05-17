document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const formData = new FormData(this);

    fetch('../../assets/scripts/send_email.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById('responseMessage').innerText = data;
        this.reset();
    })
    .catch(error => {
        document.getElementById('responseMessage').innerText = 'An error occurred. Please try again later.';
        console.error('Error:', error);
    });
});

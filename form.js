document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('feedback-form');
    if (!form) return;

    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        
        const formData = {
            name: form.querySelector('[name="name"]').value,
            email: form.querySelector('[name="email"]').value,
            phone: form.querySelector('[name="phone"]').value,
            message: form.querySelector('[name="message"]').value
        };

        try {
            const response = await fetch('/api/submit', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': localStorage.getItem('token') ? `Bearer ${localStorage.getItem('token')}` : ''
                },
                body: JSON.stringify(formData)
            });

            const data = await response.json();

            if (!response.ok) {
                throw new Error(data.errors?.join(', ') || 'Server error');
            }

            if (data.credentials) {
                alert(`Your login: ${data.credentials.login}\nPassword: ${data.credentials.password}\nProfile: ${data.credentials.profile_url}`);
            } else {
                alert('Form submitted successfully!');
            }

        } catch (error) {
            alert(`Error: ${error.message}`);
        }
    });
});

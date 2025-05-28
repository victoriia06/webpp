export function initFormSubmission() {
  const form = document.getElementById('form');
  if (!form) return;

  form.addEventListener('submit', async (e) => {
    e.preventDefault();
    
    const successMsg = document.getElementById('success-message');
    const errorMsg = document.getElementById('error-message');
    successMsg.style.display = 'none';
    errorMsg.style.display = 'none';

    const formData = new FormData(form);
    const jsonData = {};
    formData.forEach((value, key) => jsonData[key] = value);

    try {
      const response = await fetch('/api/submit', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'Accept': 'application/json'
        },
        body: JSON.stringify(jsonData)
      });

      const data = await response.json();

      if (!response.ok) {
        throw new Error(data.errors?.join(', ') || 'Ошибка сервера');
      }

      form.reset();
      successMsg.textContent = data.message;
      successMsg.style.display = 'block';

      if (data.credentials) {
        alert(`Ваши учетные данные:\nЛогин: ${data.credentials.login}\nПароль: ${data.credentials.password}`);
      }
    } catch (error) {
      errorMsg.textContent = error.message;
      errorMsg.style.display = 'block';
      console.error('Ошибка:', error);
    }
  });

  // Fallback для отключенного JavaScript
  if (form.hasAttribute('data-js')) {
    form.removeAttribute('action');
  } else {
    form.setAttribute('action', '/api/submit');
    form.setAttribute('method', 'post');
  }
}

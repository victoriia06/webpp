export function initFormSubmission() {
    const feedbackForm = document.getElementById('form');
    const successMessage = document.getElementById('success-message');
    const errorMessage = document.getElementById('error-message');
  
    if (feedbackForm) {
      feedbackForm.addEventListener('submit', (e) => {
        e.preventDefault();
        
        successMessage.style.display = 'none';
        errorMessage.style.display = 'none';
  
        // Собираем данные формы
        const formData = new FormData(feedbackForm);
        const jsonData = {};
        formData.forEach((value, key) => jsonData[key] = value);
  
        // Отправляем на наш API
        fetch('/api/submit', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
          },
          body: JSON.stringify(jsonData)
        })
        .then(response => response.json())
        .then(data => {
          if (data.errors) {
            errorMessage.textContent = data.errors.join('\n');
            errorMessage.style.display = 'block';
          } else if (data.success) {
            successMessage.style.display = 'block';
            errorMessage.style.display = 'none';
            feedbackForm.reset();
            
            // Показываем учетные данные, если они есть
            if (data.credentials) {
              alert(`Ваши учетные данные:\nЛогин: ${data.credentials.login}\nПароль: ${data.credentials.password}\n\nСсылка для редактирования: ${data.credentials.profile_url}`);
            }
          }
        })
        .catch(error => {
          errorMessage.textContent = 'Произошла ошибка при отправке формы. Пожалуйста, попробуйте снова.';
          errorMessage.style.display = 'block';
          console.error('Ошибка:', error);
        });
      });
    }
  }

const form = document.querySelector('form');
const toInput = document.querySelector('#to');
const subjectInput = document.querySelector('#subject');
const bodyTextarea = document.querySelector('#body');
const attachmentsInput = document.querySelector('#attachments');
const ccInput = document.querySelector('#cc');
const bccInput = document.querySelector('#bcc');

// Validate email address format
function isValidEmail(email) {
  const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
}

// Validate form input
function validateForm() {
  const toValue = toInput.value.trim();
  const subjectValue = subjectInput.value.trim();
  const bodyValue = bodyTextarea.value.trim();

  if (!toValue || !isValidEmail(toValue)) {
    alert('Please enter a valid email address for the recipient.');
    return false;
  }

  if (!subjectValue) {
    alert('Please enter a subject for the email.');
    return false;
  }

  if (!bodyValue) {
    alert('Please enter a message for the email.');
    return false;
  }

  return true;
}

// Handle form submission
form.addEventListener('submit', (e) => {
  e.preventDefault();

  if (!validateForm()) {
    return;
  }

  // Send email using backend server
  const formData = new FormData(form);
  fetch('/send_email', {
    method: 'POST',
    body: formData
  })
  .then((response) => {
    if (response.ok) {
      alert('Email sent successfully!');
      form.reset();
    } else {
      throw new Error('Error sending email.');
    }
  })
  .catch((error) => {
    console.error(error);
    alert('Error sending email. Please try again later.');
  });
});
if ('serviceWorker' in navigator) {
  navigator.serviceWorker.register('/assets/js/sw.js')
    .then(reg => console.log('service worker registered'))
    .catch(err => console.log('service worker not registered', err));
}

document.addEventListener('DOMContentLoaded', () => {
  const frmContact = document.getElementById('frmContact');
  const thankyouMessage = document.getElementById('thankyou_message');
  if (frmContact) {
    frmContact.addEventListener('submit', (evt) => {
      evt.stopPropagation();
      evt.preventDefault();

      var xhr = new XMLHttpRequest();
      var data = new FormData(frmContact);
      xhr.open('POST', '../app/email.php')
      xhr.send(data);

      xhr.onreadystatechange = function () {
        if (xhr.readyState == XMLHttpRequest.DONE && xhr.response) {
          if (JSON.parse(xhr.response).messageId) {
            frmContact.style.display = 'none';
            thankyouMessage.style.display = 'block';
          }
        } 
      }
    });
  }

});
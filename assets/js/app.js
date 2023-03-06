if ('serviceWorker' in navigator) {
  navigator.serviceWorker.register('/assets/js/sw.js')
    .then(reg => console.log('service worker registered'))
    .catch(err => console.log('service worker not registered', err));
}

document.addEventListener('DOMContentLoaded', () => {
  const btn = document.getElementById('btnContact');
  if (btn) {
    btn.addEventListener('click', () => {
      console.log('btn clicked');
      const frmContact = document.getElementById('frmContact');
      const thankyouMessage = document.getElementById('thankyou_message');
      frmContact.style.display = 'none';
      thankyouMessage.style.display = 'block';
      //   $.ajaxSubmit({
      //     url: '/addpost',
      //     type: 'post',
      //     dataType: 'html',
      //     data : $( "#addpost" ).serialize(),
      //     success : function(data) {
      //         location.reload();
      //     }
      // });
    });
  }

});
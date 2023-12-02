document.addEventListener('DOMContentLoaded', function () {
  var deleteModal = document.getElementById('confirmDeleteModal');
  deleteModal.addEventListener('show.bs.modal', function (event) {
      var button = event.relatedTarget;
      var postId = button.getAttribute('data-post-id');
      var deleteButton = deleteModal.querySelector('#deletePostBtn');

      deleteButton.onclick = function () {
          window.location.href = '../controller/delete_post.php?post_id=' + postId;
      };
  });
});

function validateLoginForm() {
  var username = document.getElementById('nome').value;
  var password = document.getElementById('senha').value;
  var errorMessage = document.getElementById('error-message');
  
  if(username === '' || password === '') {
      errorMessage.innerHTML = 'Por favor, preencha todos os campos.';
      errorMessage.style.color = 'red';
      return false; // Prevent form submission
  }

  return true; // Allow form submission
}

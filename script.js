// Get modal elements
const loginModal = document.getElementById('loginModal');
const registerModal = document.getElementById('registerModal');
const closeButtons = document.querySelectorAll('.close');

// Open Login Modal
function openLoginModal() {
  loginModal.style.display = 'block';
}

// Open Register Modal
function openRegisterModal() {
  registerModal.style.display = 'block';
}

// Close modals
closeButtons.forEach(button => {
  button.onclick = function () {
    loginModal.style.display = 'none';
    registerModal.style.display = 'none';
  };
});

// Close modal when clicking outside of it
window.onclick = function(event) {
  if (event.target == loginModal || event.target == registerModal) {
    loginModal.style.display = 'none';
    registerModal.style.display = 'none';
  }
};

// Password validation for registration
document.getElementById('registerForm').addEventListener('submit', function (event) {
  const password = document.getElementById('registerPassword').value;
  const confirmPassword = document.getElementById('confirmPassword').value;
  if (password !== confirmPassword) {
    alert("Passwords do not match.");
    event.preventDefault();
  }
});

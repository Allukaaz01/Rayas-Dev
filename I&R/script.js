let container = document.getElementById('container');
let registerBtn = document.getElementById('register');
let loginBtn = document.getElementById('login');

registerBtn.addEventListener ('click', (e) => {
  e.preventDefault();
  container.classList.add("active");
});

loginBtn.addEventListener ('click', (e) => {
  e.preventDefault();
  container.classList.remove("active");
})

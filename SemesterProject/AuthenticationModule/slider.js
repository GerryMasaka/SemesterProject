  
const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});

function checkPassword() {
  let password = document.getElementById("password").value;
  let confirmPassword = document.getElementById("passwordConfirm").value;
  console.log(password,confirmPassword);
  let message = document.getElementById("message");
   if (password == confirmPassword) {
     document.getElementById("message").innerHTML = '<span><i class="fas fa-check-circle"></i>Match !</span>';
     document.getElementById("message").style.color = "#25dbbd";
   }else {
     message.textContent = "Passwords don't match";
     document.getElementById("message").innerHTML = '<span><i class="fas fa-exclamation-triangle"></i> Dont Match !</span>';
     document.getElementById("message").style.color = "#d44240";
   }
}
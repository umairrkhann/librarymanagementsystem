// REGISTRATION FORM
function validateForm() {
  const username = document.getElementById("username").value;
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;
  const confirmPassword = document.getElementById("confirmPassword").value;
  const errorMessage = document.getElementById("errorMessage");

  if (username.trim() === "" || email.trim() === "" || password.trim() === "" || confirmPassword.trim() === "") {
    document.getElementById("errorMessage").textContent = "Please fill out all fields.";
    return false; // Prevent the form submission
}
  // Simple validation example (you can add more complex validation)
  if (password !== confirmPassword) {
    errorMessage.textContent = "Passwords do not match!";
    return false; // Prevent form submission
  }
  return true; // Allow form submission
}

if (username && email && password && password === confirmPassword) {
  // Perform your registration logic here (e.g., sending data to a server)

  // Display the registration completion message
  const registrationMessage = document.getElementById("registrationMessage");
  registrationMessage.textContent = "Registration completed successfully!";
  registrationMessage.style.color = "green";

  // Prevent the form submission
  return true;
} 

    // You can also store the registration data or submit it to a server at this point.

   
window.onload = function () {
  // Get the value from localStorage
  var value = localStorage.getItem("userValue");
  // Display the value on the page
  var output = document.getElementById("usernameDisplay");
  output.innerText = value;
};

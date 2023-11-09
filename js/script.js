// JavaScript file (redirect.js)

document.addEventListener("DOMContentLoaded", function() {
    // Define your email and password
    const validEmail = "fabianedcel@gmail.com";
    const validPassword = "EdcelPogi";
  
    // Get the login form and add a submit event listener
    const loginForm = document.querySelector("form");
    loginForm.addEventListener("submit", function(event) {
      event.preventDefault(); // Prevent the default form submission
  
      // Get the values entered by the user
      const email = document.getElementById("username").value;
      const password = document.getElementById("password").value;
  
      // Check if the entered email and password match the valid ones
      if (email === validEmail && password === validPassword) {
        // Redirect to the index page
        window.location.href = "index1.html";
      } else {
        // Display an error message (you can customize this part)
        alert("Invalid email or password. Please try again.");
      }
    });
  });
  
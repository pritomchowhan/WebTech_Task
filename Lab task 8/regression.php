<!DOCTYPE html>
<html lang="en">
<head>
<title>Registration Form</title>
<script>
  function validateFirstName() {
    const firstName = document.getElementById("first-name").value;
    const firstNameError = document.getElementById("first-name-error");
    
    if (firstName.trim() === "") {
      firstNameError.textContent = "First Name is required";
      return false;
    }
    
    firstNameError.textContent = "";
    return true;
  }
  
  function validateLastName() {
    const lastName = document.getElementById("last-name").value;
    const lastNameError = document.getElementById("last-name-error");
    
    if (lastName.trim() === "") {
      lastNameError.textContent = "Last Name is required";
      return false;
    }
    
    lastNameError.textContent = "";
    return true;
  }
  
  function validateUsername() {
    const username = document.getElementById("username").value;
    const usernameError = document.getElementById("username-error");
    
    if (username.trim() === "") {
      usernameError.textContent = "User Name is required";
      return false;
    }
    
    usernameError.textContent = "";
    return true;
  }
  
  function validatePassword() {
    const password = document.getElementById("password").value;
    const passwordError = document.getElementById("password-error");
    
    if (password.trim() === "") {
      passwordError.textContent = "Password is required";
      return false;
    }
    
    passwordError.textContent = "";
    return true;
  }
  
  function validateConfirmPassword() {
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirm-password").value;
    const confirmPasswordError = document.getElementById("confirm-password-error");
    
    if (confirmPassword.trim() === "") {
      confirmPasswordError.textContent = "Confirm Password is required";
      return false;
    }
    
    if (password !== confirmPassword) {
      confirmPasswordError.textContent = "Passwords do not match";
      return false;
    }
    
    confirmPasswordError.textContent = "";
    return true;
  }
  
  function validateEmail() {
    const email = document.getElementById("email").value;
    const emailError = document.getElementById("email-error");
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    
    if (!emailPattern.test(email)) {
      emailError.textContent = "Invalid Email format";
      return false;
    }
    
    emailError.textContent = "";
    return true;
  }
  
  function validateNationality() {
    const nationality = document.getElementById("nationality").value;
    const nationalityError = document.getElementById("nationality-error");
    
    if (nationality.trim() === "") {
      nationalityError.textContent = "Nationality is required";
      return false;
    }
    
    nationalityError.textContent = "";
    return true;
  }
  
  function validateDateOfBirth() {
    const dob = document.getElementById("dob").value;
    const dobError = document.getElementById("dob-error");
    
    if (dob.trim() === "") {
      dobError.textContent = "Date of Birth is required";
      return false;
    }
    
    dobError.textContent = "";
    return true;
  }
  
  function validateForm() {
    return (
      validateFirstName() &&
      validateLastName() &&
      validateUsername() &&
      validatePassword() &&
      validateConfirmPassword() &&
      validateEmail() &&
      validateNationality() &&
      validateDateOfBirth()
    );
  }
</script>
</head>
<body>
    

    <h2 >Registration Form</h2>

<form onsubmit="return validateForm();">
  <label for="first-name">First Name:</label>
  <input type="text" id="first-name" onblur="validateFirstName();" required>
  <span id="first-name-error" style="color: red;"></span>
  <br><br>
  
  <label for="last-name">Last Name:</label>
  <input type="text" id="last-name" onblur="validateLastName();" required>
  <span id="last-name-error" style="color: red;"></span>
  <br><br>
  
  <label for="username">User Name:</label>
  <input type="text" id="username" onblur="validateUsername();" required>
  <span id="username-error" style="color: red;"></span>
  <br><br>

  <label for="dob">Date of Birth:</label>
  <input type="date" id="dob" onblur="validateDateOfBirth();" required>
  <span id="dob-error" style="color: red;"></span>
  <br><br>
  
  <label for="password">Password:</label>
  <input type="password" id="password" onblur="validatePassword();" required>
  <span id="password-error" style="color: red;"></span>
  <br><br>
  
  <label for="confirm-password">Confirm Password:</label>
  <input type="password" id="confirm-password" onblur="validateConfirmPassword();" required>
  <span id="confirm-password-error" style="color: red;"></span>
  <br><br>
  
  <label for="email">Email:</label>
  <input type="email" id="email" onblur="validateEmail();" required>
  <span id="email-error" style="color: red;"></span>
  <br><br>
  
  <label for="nationality">Nationality:</label>
  <input type="text" id="nationality" onblur="validateNationality();" required>
  <span id="nationality-error" style="color: red;"></span>
  <br><br>
  

  
  <button type="submit">Register</button>
</form>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f4f4f4;
        }

        .container {
            width: 400px;
            padding: 20px;
            background: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            text-align: center;
            margin-bottom: 15px;
        }

        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .form-group label {
            width: 100px;
            font-weight: bold;
        }

        .form-group input {
            flex: 1;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .error {
            color: red;
            font-size: 14px;
            margin-left: 10px;
        }

        button {
            width: 100%;
            padding: 10px;
            background: blue;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: darkblue;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Register</h2>
    <form id="registrationForm" action="process.php" method="POST">
        
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" id="name" required onkeyup="validateName()">
            <span class="error" id="nameError"></span>
        </div>

        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" id="email" required onkeyup="validateEmail()">
            <span class="error" id="emailError"></span>
        </div>

        <div class="form-group">
            <label>Password:</label>
            <input type="password" name="password" id="password" required onkeyup="validatePassword()">
            <span class="error" id="passwordError"></span>
        </div>

        <div class="form-group">
            <label>Phone:</label>
            <input type="text" name="phone" id="phone" required onkeyup="validatePhone()">
            <span class="error" id="phoneError"></span>
        </div>

        <button type="submit">Submit</button>
    </form>
</div>

<script>
    function validateName() {
        let name = document.getElementById("name").value;
        let nameError = document.getElementById("nameError");
        if (!/^[a-zA-Z ]+$/.test(name)) {
            nameError.innerText = "Only alphabets and spaces allowed!";
        } else {
            nameError.innerText = "";
        }
    }

    function validateEmail() {
        let email = document.getElementById("email").value;
        let emailError = document.getElementById("emailError");
        let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        if (!email.match(emailPattern)) {
            emailError.innerText = "Enter a valid email!";
        } else {
            emailError.innerText = "";
        }
    }

    function validatePassword() {
        let password = document.getElementById("password").value;
        let passwordError = document.getElementById("passwordError");
        if (password.length < 6) {
            passwordError.innerText = "Password must be at least 6 characters!";
        } else {
            passwordError.innerText = "";
        }
    }

    function validatePhone() {
        let phone = document.getElementById("phone").value;
        let phoneError = document.getElementById("phoneError");
        if (!/^[0-9]{10}$/.test(phone)) {
            phoneError.innerText = "Phone must be 10 digits!";
        } else {
            phoneError.innerText = "";
        }
    }
</script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Group 2</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
        <?php
        
        include("php/config.php");
        $response = ['errors' => [], 'success' => false];

        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $section = $_POST['section'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Validate Name
            if (empty($name)) {
                $response['errors']['name'] = '*Name is required.';
            } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $response['errors']['name'] = 'Only letters and white space allowed.';
            }

            // Validate Section
            if (empty($section)) {
                $response['errors']['section'] = '*Section is required.';
            }

            // Validate Email
            if (empty($email)) {
                $response['errors']['email'] = '*Email is required.';
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $response['errors']['email'] = 'Invalid email format.';
            } else {
                $verify_query = mysqli_query($con, "SELECT Email FROM users WHERE Email='$email'");
                if (mysqli_num_rows($verify_query) != 0) {
                    $response['errors']['email'] = 'This email is already in use.';
                }
            }

            // Validate Password
            if (empty($password)) {
                $response['errors']['password'] = '*Password is required.';
            } elseif (strlen($password) < 6) {
                $response['errors']['password'] = 'Password must be at least 6 characters long.';
            }

            // If no errors, proceed with registration
            if (empty($response['errors'])) {
                mysqli_query($con, "INSERT INTO users(Name, Section, Email, Password) VALUES('$name', '$section', '$email', '$password')") or die("Error Occurred");
                echo "<div class='message'><p>Registration successful!</p></div><br>";
                echo "<a href='index.php'><button class='btn'>Login Now</button>";
            } else {
                // Display validation errors
                foreach ($response['errors'] as $error) {
                    echo "<div class='message'><p>$error</p></div><br>";
                }
                echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
            }
        } else {

        ?>
            <header>Register</header>
            <form action="register.php" method="POST">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required>
                </div>
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" required>
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="field input">
                    <label for="con_password">Confirm Password</label>
                    <input type="password" name="con_password" id="con_password" required>
                </div>
                <div class="field">
                    <input type="submit" name="submit" class="btn" value="Register" required>
                </div>
                <div class="links">
                    Already have an account? <a href="login.php">Log in</a>
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
</body>
</html>
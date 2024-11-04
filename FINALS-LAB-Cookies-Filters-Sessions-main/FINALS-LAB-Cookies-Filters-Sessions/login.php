<?php 

session_start();

?>

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
        if(isset($_POST['submit'])){
            $email = mysqli_real_escape_string($con, $_POST['email']);
            $password = mysqli_real_escape_string($con, $_POST['password']);
            $remember = isset($_POST['remember_me']);

            $result = mysqli_query($con,"SELECT * FROM users WHERE Email='$email' AND Password='$password'") or die("Select Error");
            $row = mysqli_fetch_assoc($result);

            if(is_array($row) && !empty($row)){
                $_SESSION['valid'] = $row['Email'];
                $_SESSION['username'] = $row['Username'];
                $_SESSION['id'] = $row['Id'];
            
            if ($remember) {
                setcookie("email", $email, time() + (86400 * 30), "/"); // 86400 = 1 day
                setcookie("token", hash('sha256', $password), time() + (86400 * 30), "/");
            }
    
            header("Location: home.php");
            exit();
        }
            else{
                echo "<div class='message'>
                <p>Wrong Username or Password </p>
                </div> <br>";
                echo "<a href='index.php'><button class='btn'>Go Back</button>";
            }
            if(isset($_SESSION['valid'])){
                header("Location: home.php");
            }
        }else {
        
        ?>

            <header>Login</header>
            <form action="login.php" method="POST">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" required>
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="field">
                    <input type="submit" name="submit" class="btn" value="Login" required>
                </div>
                <div class="field">
                    <label>
                        <input type="checkbox" name="remember_me" id="remember_me">Remember Me</label>
                    </div>
                <div class="links">
                    Don't have account? <a href="register.php">Sign Up</a>
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
</body>
</html>
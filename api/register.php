<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Register</title>
</head>
<body>

    <div class="bg-img">
      <div class="container">
        <div class="box form-box">

        <?php 
         
         include("api/config.php");
         if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $age = $_POST['age'];
            $password = $_POST['password'];

         //verifying the unique email

         $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");

         if(mysqli_num_rows($verify_query) !=0 ){
            echo "<div class='message'>
                      <p>This email is used, Try another One Please!</p>
                  </div> <br>";
            echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
         }
         else{

            mysqli_query($con,"INSERT INTO users(Username,Email,Age,Password) VALUES('$username','$email','$age','$password')") or die("Error Occured");

            header("Location: verif.php");
            exit();

         }

         }else{
         
        ?>

            <header>Create an Account</header>
            <form action="" method="post">
                <div class="field input">
                    <input type="text" name="username" id="username" placeholder="Username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <input type="text" name="email" id="email" placeholder="Email" autocomplete="on" required>
                </div>

                <div class="field input">
                    <input type="number" name="age" id="age" placeholder="Age" autocomplete="off" required>
                </div>

                <div class="field input">
                    <input type="password" name="password" id="password" placeholder="Password" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>

                <div class="links">
                    Already a member? <a href="index.php">Sign In</a>
                </div>

                <div class="footer">
                    By continuing, you agree to the <span class="terms">Terms of Service </span>and acknowledge the <span class="terms">Privacy Policy.</span>
                </div>
            </form>
        </div>
        <!-- <?php } ?> -->
      </div>
    </div>
</body>
</html>
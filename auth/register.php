<?php include "../partials/header.php"; ?>
<?php

$message = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $raw_username = $_POST['username'];
    if (!preg_match("/^[a-zA-Z0-9]+$/", $raw_username)) {
        $message = "Only letters and numbers are allowed, special characters ex: !,@,#,$ and white spaces not allowed";
    } else {

        $username = mysqli_real_escape_string($connection, $_POST['username']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $check = mysqli_query($connection, "select id FROM users WHERE email = '$email' ");

        if (mysqli_num_rows($check) > 0) {
            $message = "Email already exits in the server";
        } else {
            $query = mysqli_query($connection, "INSERT INTO users (username, email, password) VALUES ('$username','$email','$password')");

            if ($query) {
                header("Location: login.php?registered=1");
                exit();
            } else {
                $message = "Registration failed";
            }
        }
    }
}

?>


<?php
// include "../partials/navbar.php"; 
?>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 85vh;">
    <div class="col-md-5">

        <div class="card shadow-sm border-0">
            <div class="card-body p-4">
                <h2 class="text-center mb-3">
                    <a class="navbar-brand fw-bold" href="/HelthcareSystem/">
                        Sphare<span class="text-primary">Healthcare</span>
                    </a>
                </h2>
                <h3 class="text-center mb-4 fw-bold">Create Account</h3>

                <?php if ($message) : ?>
                    <div class="alert alert-danger"><?php echo $message; ?></div>
                <?php endif; ?>
                <form action="register.php" method="POST">

                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Register</button>

                    <div class="mt-3 text-center">
                        Already have an account? <a href="login.php">Login</a>
                    </div>

                </form>

            </div>
        </div>

    </div>
</div>

<?php 
// include "../partials/footer.php"; 
?>
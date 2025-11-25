<?php
include "../partials/header.php";
?>
<?php

$message = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = $_POST['password'];

    $query = mysqli_query($connection, "SELECT id, username, email, password FROM users WHERE email= '$email' LIMIT 1 ");

    if (mysqli_num_rows($query) == 1) {
        $user = mysqli_fetch_assoc($query);

        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];

            header("Location: ../web/dashboard.php");
            exit();
        } else {
            $message = "Your password is incorrect";
        }
    } else {
        $message = "Your email is not exist in our database";
    }
}

?>


<?php
// include "../partials/navbar.php"; 
?>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="col-md-4">

        <div class="card shadow-sm border-0">
            <div class="card-body p-4">

                <h2 class="text-center mb-3">
                    <a class="navbar-brand fw-bold" href="/HelthcareSystem/">
                        Sphare<span class="text-primary">Healthcare</span>
                    </a>
                </h2>
                <h3 class="text-center mb-4 fw-bold">Login</h3>

                <?php if ($message) : ?>
                    <div class="alert alert-danger"><?php echo $message ?></div>
                <?php endif ?>


                <form action="login.php" method="POST">

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Login</button>

                    <div class="mt-3 text-center">
                        <a href="forgot-password.php">Forgot Password?</a>
                    </div>

                    <div class="mt-3 text-center">
                        Don't have an account? <a href="register.php">Register</a>
                    </div>

                </form>

            </div>
        </div>

    </div>
</div>

<?php 
// include "../partials/footer.php"; 
?>
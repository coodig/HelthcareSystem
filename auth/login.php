<!-- 
 

// $message = "";

// if($_SERVER['REQUEST_METHOD'] == "POST"){
//     $email = mysqli_real_escape_string($connection,$_POST['email']);
//     $password = 
// }

// ?>



<?php
include "../partials/header.php";
include "../partials/navbar.php";
?>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="col-md-4">

        <div class="card shadow-sm border-0">
            <div class="card-body p-4">

                <h3 class="text-center mb-4 fw-bold">Login</h3>

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

<?php include "../partials/footer.php"; ?>

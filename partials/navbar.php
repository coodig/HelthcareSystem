<?php 
session_start();

$username = $_SESSION['username'] ?? null;

?>



<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand fw-bold" href="/HelthcareSystem/">
            Sphare<span class="text-primary">Healthcare</span>
        </a>

        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu Items -->
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                <?php if (!isset($_SESSION['user_id'])) : ?>

                    <li class="nav-item">
                        <a class="nav-link" href="/HelthcareSystem/auth/login.php">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/HelthcareSystem/auth/register.php">Register</a>
                    </li>

                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/HelthcareSystem/web/dashboard.php"><?php echo htmlspecialchars($username); ?> </a>
                    </li>

                    <li>
                        <a href="#" class="btn btn-danger justify-content-center text-center ms-2">logout</a>
                    </li>
                <?php endif; ?>

            </ul>
        </div>

    </div>
</nav>
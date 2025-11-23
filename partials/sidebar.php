<div class="d-flex">
    <div class="bg-light border-end" id="sidebar" style="width: 240px; min-height: 100vh;">
        <!-- <div class="sidebar-heading text-center py-4 fs-5 fw-bold border-bottom">
            Sphare<span class="text-primary">Healthcare</span>
        </div> -->

        <div class="list-group list-group-flush">
            <a href="/HelthcareSystem/web/dashboard.php" class="list-group-item list-group-item-action py-3">
                Dashboard
            </a>

            <a href="/HelthcareSystem/auth/login.php" class="list-group-item list-group-item-action py-3">
                Login
            </a>

            <a href="/HelthcareSystem/auth/register.php" class="list-group-item list-group-item-action py-3">
                Register
            </a>

            <a href="#" class="list-group-item list-group-item-action py-3">
                Appointments
            </a>

            <a href="#" class="list-group-item list-group-item-action py-3">
                Patients
            </a>

            <a href="#" class="list-group-item list-group-item-action py-3">
                Doctors
            </a>

            <a href="#" class="list-group-item list-group-item-action py-3">
                Settings
            </a>
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="#" class=" mb-0 list-group-item list-group-item-action py-3 text-danger">
                    logout
                </a>
            <?php endif; ?>
        </div>
    </div>

    <div class="p-4 w-100">
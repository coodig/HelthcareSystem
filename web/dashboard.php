<!-- <?php

    // session_start();

?> -->

<?php
include "../partials/header.php";
include "../partials/navbar.php";
include "../partials/sidebar.php";
?>

<div class="container-fluid">

    <h2 class="fw-bold mb-4">Dashboard</h2>

    <!-- <h3 class="font-bold">Welcome, <?php $_SESSION['username']; ?></h3> -->
    <div class="row g-4">

        <div class="col-md-3">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title">Total Patients</h5>
                    <p class="display-6 fw-bold text-primary">120</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title">Appointments</h5>
                    <p class="display-6 fw-bold text-success">45</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title">Doctors</h5>
                    <p class="display-6 fw-bold text-info">18</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title">Pending Reports</h5>
                    <p class="display-6 fw-bold text-danger">7</p>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-5">

    <div class="card shadow-sm border-0">
        <div class="card-header bg-primary text-white fw-bold">
            Recent Appointments
        </div>

        <div class="card-body p-0">
            <table class="table table-striped mb-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Patient</th>
                        <th>Doctor</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Aditya Kumar</td>
                        <td>Dr. Sharma</td>
                        <td>2025-11-21</td>
                        <td><span class="badge bg-success">Completed</span></td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Neha Singh</td>
                        <td>Dr. Verma</td>
                        <td>2025-11-20</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Rohit Mishra</td>
                        <td>Dr. Khan</td>
                        <td>2025-11-19</td>
                        <td><span class="badge bg-danger">Cancelled</span></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

</div>

<?php include "../partials/footer.php"; ?>

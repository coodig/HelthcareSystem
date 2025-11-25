<?php
// include "partials/header.php";
// include "partials/navbar.php";
// include "partials/sidebar.php";

?>
<!-- 
<div class="container mt-5">
    <div class="text-center">
        <h1 class="fw-bold">Welcome to Sphare Healthcare</h1>
        <p class="lead">Your trusted healthcare management platform.</p>


        <a href="/HelthcareSystem/auth/login.php" class="btn btn-primary me-2">Login</a>
        <a href="/HelthcareSystem/auth/register.php" class="btn btn-outline-primary">Register</a>
    </div>
</div>

</div>
</div>
 -->

<?php 
// include "partials/footer.php"; 
?>


<?php
include "partials/header.php";
include "partials/navbar.php";
?>

<section class="bg-light py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- <span class="badge bg-primary mb-2 rounded-pill px-3">New Feature: AI Diagnosis</span> -->
                <h1 class="display-4 fw-bold text-dark">
                    Smart Healthcare <br> for a <span class="text-primary">Better Life.</span>
                </h1>
                <p class="lead text-muted mb-4">
                    Sphare Healthcare is an advanced hospital management system designed to streamline operations, 
                    manage patients, and provide world-class medical services at your fingertips.
                </p>
                <?php  ?>
                <div class="d-flex gap-2">
                    <a href="/HelthcareSystem/auth/login.php" class="btn btn-primary btn-lg px-4 shadow-sm">
                        <i class="fas fa-sign-in-alt me-2"></i> Login
                    </a>
                    <a href="/HelthcareSystem/auth/register.php" class="btn btn-outline-primary btn-lg px-4">
                        Register Now
                    </a>
                </div>

                <div class="d-flex gap-2">
                    <a href="/HelthcareSystem/auth/login.php" class="btn btn-primary btn-lg px-4 shadow-sm">
                        <i class="fas fa-sign-in-alt me-2"></i> Login
                    </a>
                    <a href="/HelthcareSystem/auth/register.php" class="btn btn-outline-primary btn-lg px-4">
                        Register Now
                    </a>
                </div>
                
                <div class="mt-4 pt-3 border-top">
                    <small class="text-muted fw-bold">TRUSTED BY:</small>
                    <div class="d-flex gap-4 mt-2 text-secondary">
                        <span><i class="fas fa-hospital me-1"></i> City Hospital</span>
                        <span><i class="fas fa-user-md me-1"></i> 50+ Doctors</span>
                        <span><i class="fas fa-users me-1"></i> 10k+ Patients</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 text-center mt-5 mt-lg-0">
                <img src="https://img.freepik.com/free-vector/health-professional-team_23-2148484530.jpg?w=740" 
                     alt="Healthcare Team" class="img-fluid rounded-4 shadow-lg" style="max-height: 400px;">
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h6 class="text-primary fw-bold text-uppercase">Our Services</h6>
            <h2 class="fw-bold">Everything You Need for Health</h2>
            <p class="text-muted">Comprehensive medical solutions for patients and doctors.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-3">
                <div class="card h-100 border-0 shadow-sm p-3 text-center hover-card">
                    <div class="card-body">
                        <div class="mb-3 text-primary">
                            <i class="fas fa-calendar-check fa-3x"></i>
                        </div>
                        <h5 class="card-title fw-bold">Easy Appointments</h5>
                        <p class="card-text text-muted small">Book appointments with top specialists instantly without waiting in queues.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="card h-100 border-0 shadow-sm p-3 text-center hover-card">
                    <div class="card-body">
                        <div class="mb-3 text-success">
                            <i class="fas fa-file-medical-alt fa-3x"></i>
                        </div>
                        <h5 class="card-title fw-bold">Digital Health Records</h5>
                        <p class="card-text text-muted small">Access your medical history, lab reports, and prescriptions anytime, anywhere.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card h-100 border-0 shadow-sm p-3 text-center hover-card">
                    <div class="card-body">
                        <div class="mb-3 text-danger">
                            <i class="fas fa-ambulance fa-3x"></i>
                        </div>
                        <h5 class="card-title fw-bold">Emergency Services</h5>
                        <p class="card-text text-muted small">24/7 Ambulance tracking and emergency response team ready for you.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card h-100 border-0 shadow-sm p-3 text-center hover-card">
                    <div class="card-body">
                        <div class="mb-3 text-warning">
                            <i class="fas fa-pills fa-3x"></i>
                        </div>
                        <h5 class="card-title fw-bold">Online Pharmacy</h5>
                        <p class="card-text text-muted small">Order medicines online and get them delivered to your doorstep quickly.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-primary text-white py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3">
                <h2 class="fw-bold display-5">120+</h2>
                <p>Expert Doctors</p>
            </div>
            <div class="col-md-3">
                <h2 class="fw-bold display-5">15k+</h2>
                <p>Happy Patients</p>
            </div>
            <div class="col-md-3">
                <h2 class="fw-bold display-5">50+</h2>
                <p>Medical Rooms</p>
            </div>
            <div class="col-md-3">
                <h2 class="fw-bold display-5">24/7</h2>
                <p>Support Available</p>
            </div>
        </div>
    </div>
</section>

<section class="py-4 text-center mb-5">
    <div class="container">
        <h2 class="fw-bold mb-3">Ready to get started?</h2>
        <p class="lead text-muted mb-4">Join thousands of patients and doctors on Sphare Healthcare today.</p>
        <a href="/HelthcareSystem/auth/register.php" class="btn btn-dark btn-lg">Create Free Account</a>
    </div>
</section>

<style>
    .hover-card {
        transition: transform 0.3s ease;
    }
    .hover-card:hover {
        transform: translateY(-10px);
    }
</style>

<?php include "partials/footer.php"; ?>
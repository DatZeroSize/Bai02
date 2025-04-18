<?php include('template/head.php') ?>
<?php include('template/header.php') ?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-5">
            <div class="card border-0 shadow" style="border-radius: 12px; overflow: hidden;">
                <div class="card-header border-0 text-center py-3" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                    <h3 class="text-white mb-1 fw-bold"><i class="fas fa-user-plus me-2"></i> Create Account</h3>
                    <p class="text-white-50 mb-0">Create a new account using PHP </p>
                </div>

                <div class="card-body px-4 py-4" style="background-color: #f8f9fe;">
                    <form method="POST" action="controller/c_signup.php">

                        <div class="mb-2">
                            <label for="username" class="form-label small text-uppercase fw-bold" style="color: #5d5d5d;">Email Address</label>
                            <div class="input-group">
                                <span class="input-group-text bg-white border-end-0"><i class="fas fa-envelope text-primary"></i></span>
                                <input type="email" class="form-control border-start-0" id="username" name="username"
                                    placeholder="Enter your email" style="padding: 10px 15px; border-radius: 0 8px 8px 0 !important;">
                            </div>
                        </div>

                        <div class="mb-2">
                            <label for="password" class="form-label small text-uppercase fw-bold" style="color: #5d5d5d;">Password</label>
                            <div class="input-group">
                                <span class="input-group-text bg-white border-end-0"><i class="fas fa-lock text-primary"></i></span>
                                <input type="password" class="form-control border-start-0" id="password" name="password"
                                    placeholder="Create a password" style="padding: 10px 15px; border-radius: 0 8px 8px 0 !important;">
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-6 mb-3">
                                <label for="firstname" class="form-label small text-uppercase fw-bold" style="color: #5d5d5d;">First Name</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white border-end-0"><i class="fas fa-user text-primary"></i></span>
                                    <input type="text" class="form-control border-start-0" id="firstname" name="firstname"
                                        placeholder="First name" style="padding: 10px 15px; border-radius: 0 8px 8px 0 !important;">
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="lastname" class="form-label small text-uppercase fw-bold" style="color: #5d5d5d;">Last Name</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white border-end-0"><i class="fas fa-user text-primary"></i></span>
                                    <input type="text" class="form-control border-start-0" id="lastname" name="lastname"
                                        placeholder="Last name" style="padding: 10px 15px; border-radius: 0 8px 8px 0 !important;">
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center mt-2">
                            <button class="btn py-2 fw-bold text-white" type="submit"
                                style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); 
                                       border: none; 
                                       border-radius: 8px;
                                       width: 200px;
                                       padding-left: 1.5rem; 
                                       padding-right: 1.5rem;">
                                <i class="fas fa-user-plus me-2"></i> Sign Up
                            </button>
                        </div>
                    </form>

                    <div class="text-center mt-2 pt-3">
                        <p class="small text-muted mb-0">Already have an account?
                            <a href="signin.php" class="fw-bold" style="color: #667eea; text-decoration: none;">Sign in</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('template/footer.php') ?>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
<style>
    body {
        background-color: #f5f7ff;
    }

    .form-control:focus {
        border-color: #a1a1ff;
        box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
    }

    .input-group-text {
        border-radius: 8px 0 0 8px !important;
    }

    .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(118, 75, 162, 0.2);
        transition: all 0.3s ease;
    }
</style>
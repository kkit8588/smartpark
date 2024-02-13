<?php

// include 'connect.php';

// session_start();

// if (isset($_SESSION['admin'])) {
//    $admin = $_SESSION['admin'];
// }

?>

<?php include 'header.php';?>
   
<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
   <div class="row shadow-lg bg-white rounded flex-column-reverse flex-lg-row">
      <form id="registerforms" class="col-sm-12 col-lg-7 p-5 px-lg-4 d-flex flex-column justify-content-center bg-white">
            <h4 class="text-center mb-4 fw-bold">ADMIN-REGISTER</h4>
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="email" placeholder="Email" required>
                <div class="input-group-append">
                    <div class="py-2 px-3 fs-5 border">
                        <span class="fas fa-solid fa-envelope"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="username" placeholder="Username" required>
                <div class="input-group-append">
                    <div class="py-2 px-3 fs-5 border">
                        <span class="fas fa-solid fa-user"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-4">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                <div class="input-group-append">
                    <div class="py-2 px-3 fs-5 border">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <input type="submit" class="btn btn-warning fw-bold shadow" value="REGISTER">
            <div class="mt-4 mx-auto">
               <span class="mt-3">Already have an account?</span>
               <a href="login.php" type="button" class="text-decoration-none">Login Here</a>
            </div>
      </form>
      <div class="col-sm-12 col-lg-5 d-none d-lg-block px-0">
         <img src="../upload/logo.png" class="rounded-end"  height="440" style="width: auto;">
      </div>
   </div>
</div>



   

<?php include 'footer.php' ?>

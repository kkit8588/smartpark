<?php

// include 'connect.php';

// session_start();

// if (isset($_SESSION['admin'])) {
//    $admin = $_SESSION['admin'];
// }

?>

<?php include 'header.php';?>
   
<div class="d-flex justify-content-center align-items-center" style="background-color: #fff; min-height: 100vh;">
   <div class="row shadow-lg bg-white rounded flex-column-reverse flex-lg-row">
      <form id="loginForms" class="col-sm-12 col-lg-7 p-5 px-lg-4 d-flex flex-column justify-content-center bg-white">
            <h4 class="text-center mb-4 fw-bold">ADMIN-LOGIN</h4>
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
            <input type="submit" class="btn btn-warning fw-bold shadow" value="LOGIN">
            <div class="mt-4 mx-auto">
               <span class="mt-3">Don't have an account?</span>
               <a href="register.php" type="button" class="text-decoration-none">Register Here</a>
            </div>
      </form>
      <div class="col-sm-12 col-lg-5 d-none d-lg-block px-0">
         <img src="../upload/logo.png" class="rounded-end" height="440" style="width: auto;">
      </div>
   </div>
</div>



   
<?php include '../loader.php' ?>
<?php include 'footer.php' ?>

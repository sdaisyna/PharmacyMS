<?php include 'header.php'; ?>
<?php include 'nav.php'; ?>


<div class="modal-dialog text-center">
  <div class="col-sm-9 main-section">
    <div class="modal-content">
           <div class="col-12 text-center">
             <h1 style="color:black;">Welcome !</h1>
             <hr>
           </div>
           <div class="col-8 user-img">
             <img src="assets/images/avatar.png" alt="" height="100px" width="100px">
           </div>
      <div class="col-12 form-input">
        <form method="post">
          <!-- Email -->
          <div class="input-group mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-envelope-o"></i></span>
              </div>
              <input type="text" class="form-control col-12" name="email" placeholder="Email address" required autofocus>
            </div>

            <!-- Password -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-key"></i></span>
                </div>
                <input type="password" class="form-control col-md-12" name="pass" placeholder="Password" required autofocus>
              </div>

          <a href="#" class="template-btn mt-3">Login</a>
        </form>
      </div>
      <div class="col-12 forgot" >
        <a href="#" style="color:black;">Forgot password?</a>
      </div>
      <div class="col-12" >
          <a href="#" style="color:black;"> Already have an account?</a>
        </div>
    </div>
  </div>
</div>


<style media="screen">

  .main-section
  {
    margin: 0 auto;
    margin-top: 200px;
    padding: 0;

  }
  .modal-content
  {
    background-color: white;
    opacity:10;
    padding: 0 18px;
    border-radius:10px;
  }
  .user-img{
    margin-top: -7px;
    margin-bottom: 45px;
    margin-left: 50px;
  }
  .form-group
  {
    margin-bottom: 20px;
  }
  .form-group input{
height: 42px;
border-radius: 5px;
border:0;
}
</style>

<?php include 'footer.php'; ?>

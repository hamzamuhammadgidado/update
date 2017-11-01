<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Welcome to AUNS</title>

    <!-- Link Style Shett -->
        <?php include_once"files/stylesheet.php"; ?>
    <!-- End Link Style Sheet -->
  </head>


  <body class="body-img-1">

    <!-- Header -->
        <?php include_once"files/header.php"; ?>
    <!-- End Header -->


    <!-- Content -->
        <div class="overlay">
            <div class="container">
                <div class="row">
                  <!-- Create Div -->
                    <div class="col-lg-4 offset-lg-8">
                        <div class="overlay-content">
                            <div class="wrapper-1 create-div animated fadeInDown">
                                <h4 class="text-center">Create Account !</h4><hr>

                                <form class="" action="index.html" method="post">
                                    <div class="row">

                                      <div class="col-lg-12">
                                          <div class="form-group">
                                              <input type="text" name="" value="" class="form-control" placeholder="Enter Surname">
                                          </div>
                                      </div>
                                      <div class="col-lg-12">
                                          <div class="form-group">
                                              <input type="text" name="" value="" class="form-control" placeholder="Enter Others Name">
                                          </div>
                                      </div>
                                      <div class="col-lg-12">
                                          <div class="form-group">
                                              <input type="text" name="" value="" class="form-control" placeholder="Enter Email Address">
                                          </div>
                                      </div>
                                      <div class="col-lg-12">
                                          <div class="form-group">
                                              <input type="text" name="" value="" class="form-control" placeholder="Enter Password">
                                          </div>
                                      </div>
                                      <div class="col-lg-12">
                                          <div class="form-group">
                                              <input type="text" name="" value="" class="form-control" placeholder="Enter Comfirm Password">
                                          </div>
                                      </div>
                                      <div class="col-lg-12">
                                          <div class="form-group">
                                              <button type="submit" name="button" class="btn btn-block btn-secondary login-btn"> Create Account </button>
                                          </div>
                                      </div>
                                      <div class="col-lg-12">
                                          <div class="form-group">
                                              <p class="text-success">By clicking Create Account, you agree to our Terms and confirm that you have read our Data Policy,</p>
                                          </div>
                                      </div>

                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                  <!-- End Create Div -->


                  <!-- Login Div -->
                    <div class="col-lg-4 offset-lg-4">
                        <div class="overlay-content">
                            <div class="wrapper-1 login-div animated fadeInDown" style="display:none;">
                                <img src="image/user.jpg" class="img-fluid d-block mx-auto rounded-circle login-img" alt=""> <hr>

                                <form class="form-group" action="index.html" method="post">
                                    <div class="row">

                                      <div class="col-lg-12">
                                          <div class="form-group">
                                              <input type="text" name="" value="" class="form-control" placeholder="Email or Phone Number">
                                          </div>
                                      </div>
                                      <div class="col-lg-12">
                                          <div class="form-group">
                                              <input type="text" name="" value="" class="form-control" placeholder="Password">
                                          </div>
                                      </div>
                                      <div class="col-lg-12">
                                          <div class="form-group">
                                              <button type="submit" name="button" class="btn btn-block btn-secondary login-btn"> Login Account </button>
                                          </div>
                                      </div>
                                      <div class="col-lg-6">
                                          <div class="form-group">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                  <input type="checkbox" class="form-check-input">
                                                      <b>Remember Me</b>
                                                </label>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-lg-6">
                                          <div class="form-group">
                                            <a href="#">Forgot password ?</a>
                                          </div>
                                      </div>

                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                  <!-- End Login Div -->


                </div>
            </div>
        </div>
    <!-- End Content -->


    <!-- Link Footer -->
        <?php include_once"files/footer.php"; ?>
    <!-- End Link Footer -->

    <!-- Link Script -->
        <?php include_once"files/scripts.php"; ?>
    <!-- End Link Script -->
  </body>
</html>

<?php
require "function.php";

if( isset($_POST['register'])){
  if ( singup($_POST) > 0){
    echo "<script>
            alert('user baru telah di tambahkan!')</script>"
  }else {
    echo mysqli_error($db);
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <title>Document</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-xl-9 mx-auto">
          <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
            <div class="card-img-left d-none d-md-flex">
              <!-- Background image for card set in CSS! -->
            </div>
            <div class="card-body p-4 p-sm-5">
              <h5 class="card-title text-center mb-5 fw-light fs-5">Register</h5>
              <form action=" " method="post"> 
                <div class="form-floating mb-3">
                  <input type="text" name="stambuk" class="form-control" id="floatingInputUsername" placeholder="myusername" required autofocus />
                  <label for="floatingInputUsername">Stambuk</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" name="username"class="form-control" id="floatingInputUsername" placeholder="myusername" required autofocus />
                  <label for="floatingInputUsername">Username</label>
                </div>

                <div class="form-floating mb-3">
                  <input type="email" name="email" class="form-control" id="floatingInputEmail" placeholder="name@example.com" />
                  <label for="floatingInputEmail">Email address</label>
                </div>

                <hr />

                <div class="form-floating mb-3">
                  <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" />
                  <label for="floatingPassword">Password</label>
                </div>

                <div class="form-floating mb-3">
                  <input type="password" name='password2' class="password2" form-control" id="floatingPasswordConfirm" placeholder="Confirm Password" />
                  <label for="floatingPasswordConfirm">Confirm Password</label>
                </div>

                <div class="d-grid mb-2">
                  <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" name="register" type="submit">Register</button>
                </div>

                <a class="d-block text-center mt-2 small" href="login.html">Have an account? Sign In</a>

                <hr class="my-4" />
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--javascript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

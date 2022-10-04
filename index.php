<?php include 'includes/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>VBP Websoft | Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin/dist/css/adminlte.min.css">
  <!--added by veer starts-->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <!--pin box css starts-->
  <style>
	 .myform {
	  /* width: auto; */
	  height: inherit;
	  /* margin: 50px auto; */
	  background: #fff;
	  padding: 0px 0px;
	  text-align: center;
	  /* box-shadow: 0px 5px 5px 0px rgb(0 0 0 / 30%); */
	  /* border-radius: 5px; */
	}
	.mycss tbody
	{
		  width: 100%;
		text-align: -webkit-center;
		font-size: 18px;
		display: table;
	}
	.mycss form
	{
	  margin-top: 9px;
	  margin-bottom: 9px;
	}

	input:focus {
	  outline: none;
	}

	.pinButton {
	  border: none;
	  background: none;
	  font-size: 1.5em;
	  border-radius: 50%;
	  height: 35px;
	  font-weight: 550;
	  width: 35px;
	  color: transparent;
	  text-shadow: 0 0 0 rgb(102, 101, 101);
	  margin: 7px 10px;
	}

	.clear,
	.enter {
	  font-size: 1em !important;
	}

	.pinButton:hover {
	  box-shadow: #506ce8 0 0 1px 1px;
	}
	.pinButton:active {
	  background: #506ce8;
	  color: #fff;
	}
	.clear:hover {
	  box-shadow: #ff3c41 0 0 1px 1px;
	}
	.clear:active {
	  background: #ff3c41;
	  color: #fff;
	}
	.enter:hover {
	  box-shadow: #47cf73 0 0 1px 1px;
	}
	.enter:active {
	  background: #47cf73;
	  color: #fff;
	}
  </style>
  <!--pin box css ends-->
  <style>
  .veerFormStyle{
    margin-top: 43px;
    margin-bottom: 43px;
  }    
  </style>
  <!--added by veer finish-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>VBP</b> Websoft</a>
    </div>
    <div class="card-body">
      <!--<p class="login-box-msg">Sign in to start your session</p>-->
      <?php
      if(isset($_SESSION['error'])){
        echo "
          <div class='callout callout-danger text-center'>
            <p>".$_SESSION['error']."</p> 
          </div>
        ";
        unset($_SESSION['error']);
      }
      if(isset($_SESSION['success'])){
        echo "
          <div class='callout callout-success text-center'>
            <p>".$_SESSION['success']."</p> 
          </div>
        ";
        unset($_SESSION['success']);
      }
    ?>

      <div class="container mt-3">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#home">Email Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu1">PIN Login</a>
          </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
        
          <div id="home" class="container tab-pane active"><br>
            <p>
              <form action="verify.php" method="post">

                <div class="input-group mb-3">
                  <input type="email" class="form-control" name="email" placeholder="Email" required>
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-envelope"></span>
                    </div>
                  </div>
                </div>
                <div class="input-group mb-3">
                  <input type="password" class="form-control" name="password" placeholder="Password" required>
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-lock"></span>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-8">
                    <!-- <div class="icheck-primary">
                      <input type="checkbox" id="remember">
                      <label for="remember">
                        Remember Me
                      </label>
                    </div> -->
                  </div>
                  <!-- /.col -->
                  <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block" name="login">Sign In</button>
                  </div>
                  <!-- /.col -->
                </div>
              </form>
    
            </p>
            <p class="mb-1">
              <a href="forget.php">I forgot my password</a>
            </p>
          </div>
          <div id="menu1" class="container tab-pane fade mycss"><br>
              <form action="verify.php" method="post" class="veerFormStyle">
                <table class="myform input-group" id="pinpad">
                  <tbody>
                    <tr>
                      <td colspan="4"><input style="width: 80%;text-align: center;" type="password" id="password" name="pin" class="myinput"/></br></td>
                    </tr>
                    <tr>
                      <td><input type="button" value="1" id="1" class="pinButton calc"/></td>
                      <td><input type="button" value="2" id="2" class="pinButton calc"/></td>
                      <td><input type="button" value="3" id="3" class="pinButton calc"/></td>
                      <td><input type="button" value="4" id="4" class="pinButton calc"/></td>
                    </tr>
                    <tr>
                      <td><input type="button" value="5" id="5" class="pinButton calc"/></td>
                      <td><input type="button" value="6" id="6" class="pinButton calc"/></td>
                      <td><input type="button" value="7" id="7" class="pinButton calc"/></td>
                      <td><input type="button" value="8" id="8" class="pinButton calc"/></td>
                    </tr>
                    <tr>
                      <td><input type="button" value="0" id="0 " class="pinButton calc"/></td>
                      <td><input type="button" value="9" id="9" class="pinButton calc"/></td>
                      <td><input type="button" style="font-size: 1.5em!important;" value="C" id="clear" class="pinButton clear"/></td>
                      <td><input type="submit" style="font-size: 1.5em!important;color: green!important;" value="➡" id="enter" name="login" class="pinButton enter"/></td>
                    </tr>
                  </tbody>
                </table>
                <!--<div class="myform input-group mb-3" id="pinpad">

                  <input type="button" value="5" id="5" class="pinButton calc"/>
                  <input type="button" value="6" id="6" class="pinButton calc"/><br>
                  <input type="button" value="7" id="7" class="pinButton calc"/>
                  <input type="button" value="8" id="8" class="pinButton calc"/>
                  <input type="button" value="9" id="9" class="pinButton calc"/><br>
                  <input type="button" value="clear" id="clear" class="pinButton clear"/>
                  <input type="button" value="0" id="0 " class="pinButton calc"/>
                  <input type="submit" value="enter" id="enter" name="login" class="pinButton enter"/>
                </div>-->
              </form>
    
          </div>
        
        </div>
      </div>

      <!-- <div class="social-auth-links text-center mt-2 mb-3">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->

      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!--added by veer starts-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function () {
  const input_value = $("#password");

  //disable input from typing

  $("#password").keypress(function () {
    return false;
  });

  //add password
  $(".calc").click(function () {
    let value = $(this).val();
    field(value);
  });
  function field(value) {
    input_value.val(input_value.val() + value);
  }
  $("#clear").click(function () {
    input_value.val("");
  });
  $("#enter").click(function () {
    //alert("Your password " + input_value.val() + " added");
  });
});
</script>
<!--added by veer ends---->
</body>
</html>

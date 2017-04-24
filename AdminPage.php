<?php
include_once('includes/sections.php');

?>
<!DOCTYPE html>
<html>

  <head>
      <meta charset="UTF-8">
      <title> SWOTTA- A COMMUNITY NEWS PORTAL </title>
      <link rel="stylesheet" type="style/css" href="assets/css/register.css">
       <link rel="stylesheet" type="style/css" href="assets/css/.css">

      <?php
        include_once('includes/links.php');
      ?>

  </head>

  <body>

   
  <div class="imgcontainer container">
  
  <div class="logo center">
      <a href="#"><img src="images/logo12.png" alt="" /></a>
  </div>

 <div class="row">
    <div class="col col-md-6">
           <h3 class="text-center login-title">Sign in </h3>

           <form class="form-signin" action="login.php" method="post">

            <input type="email" class="form-control" name="email" placeholder="Email" required autofocus>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <button  name="login" class="btn btn-lg btn-primary btn-block" type="submit">
                Sign in</button>
            <label class="checkbox pull-left">
            <input type="checkbox" value="remember-me">Remember me</label>

            <a href="https://www.google.com/webhp?sourceid=chrome-instant&ion=1&espv=2&ie=UTF-8#q=what+is+online+address+book" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
           </form>

    </div>

    <div class="col col-md-6">
               <div class="row centered-form">
               <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Registration</h3>
                  </div>
                  <div class="panel-body">
                    <form role="form" action="createaccount.php" method="post">
                      <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                            <input type="text" name="fname" id="first_name" class="form-control input-sm" placeholder="First Name" required>
                          </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                            <input type="text" name="lname" id="last_name" class="form-control input-sm" placeholder="Last Name" required>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address" required>
                      </div>

                      <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password" required>
                          </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <div class="form-group">
                            <input type="password" name="pconfirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password" required>
                          </div>
                        </div>
                      </div>
                      
                      <input type="submit" value="Register" class="btn btn-info btn-block">
                    
                    </form>
                  </div>
                </div>
              </div>
            </div>
    </div>

  </div>

  </div>
   
  </body>


</html>

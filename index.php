<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/navbar.css">
  <title>Pristine Hotel</title>
</head>
<body>
  <nav class="navbar navbar-default" style="border-radius:0">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/pristinehotel">Pristine Hotel</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">Page 1</a></li>
          <li><a href="#">Page 2</a></li>
          <li><a href="#">Page 3</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#" data-toggle="modal" data-target="#modalRegistration"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
            <ul class="dropdown-menu" style="padding:20px;width:250px">
              <form id="login" action="index.php" method="post">
                <div class="form-group">
                  <label style="color:white">Username:</label>
                  <input type="email" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                  <label style="color:white">Password:</label>
                  <input type="password" class="form-control" name="password" required>
                </div>
                <input type="submit" class="btn btn-primary btn-block" value="Login">
              </form>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div id="modalRegistration" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center">Registration</h4>
        </div>
        <div class="modal-body">
          <form id="frmRegister" class="form-horizontal">
            <div class="lblDisplayError">
              <!-- errors will be shown here ! -->
            </div>
            <div class="form-group">
              <label for="email" class="col-sm-2 control-label">Name</label>
              <div class="col-sm-10">
                <div class="row">
                  <div class="col-md-6">
                    <input name="txtFirstName" type="text" class="form-control" placeholder="First Name" required />
                  </div>
                  <div class="col-md-6">
                    <input name="txtLastName" type="text" class="form-control" placeholder="Last Name" required/>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="email" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
                <input name="txtEmail" type="email" class="form-control" id="txtEmail" placeholder="Email" required/>
              </div>
            </div>
            <div class="form-group">
              <label for="password" class="col-sm-2 control-label">Password</label>
              <div class="col-sm-10">
                <input name="txtPassword" type="password" class="form-control" id="txtPassword" placeholder="Password" minlength="8" required/>
              </div>
            </div>
            <div class="form-group">
              <label for="password" class="col-sm-2 control-label"></label>
              <div class="col-sm-10">
                <input name="txtRetypePassword" type="password" class="form-control" id="txtRetypePassword" placeholder="Retype Password" minlength="8" required/>
              </div>
            </div>
            <div class="form-group">
              <label for="password" class="col-sm-2 control-label">Contact #</label>
              <div class="col-sm-10">
                <input name="txtContactNumber" type="number" class="form-control" id="txtContactNumber" placeholder="Contact Number" minlength="10" required/>
              </div>
            </div>
            <div class="form-group">
              <label for="captcha" class="col-sm-2 control-label"></label>
              <div class="col-sm-10">
                <div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6Ler0DUUAAAAAK0dRPfLXX4i3HXRKZCmvdLzyRDp"></div>
              </div>
            </div>
            <div class="modal-footer">
              <br/><button id="btnRegister" type="submit" class="btn btn-info" disabled>Register</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </form>
        </div>
      </div>
     </div>
  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>
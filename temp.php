<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nav_style.css">
    <link rel="stylesheet" href="login_card_selection.css">
    <link rel="stylesheet" href="login_form.css">

</head>
<body>
    <div class="navbar-mobile">
        <!--<a href="#home" class="active"><img src="logo.png" style="height: 30px; width: 100px;"></a>-->
        <a href="#home" class="active">Home</a>
        <div id="myLinks">
            <a href="#">Contact</a>
            <a href="#">Support</a>
            <a href="#">Careers</a>
            <a href="#">knowlwdge Centre</a>
            <a href="calculator.html">Saving Caculator</a>
            <a href="#">About Us</a>
        </div>
        <a href="javascript:void(0);" class="icon" onclick="Function()">
            <div class="line-icon"></div>
            <div class="line-icon"></div>
            <div class="line-icon"></div>
        </a>
    </div>
    <div class="navbar">
        <a href="#home" class="l">Home</a>
        <a href="#">Contact</a>
        <a href="#">Support</a>
        <a href="#">Careers</a>
        <a href="#">knowlwdge Centre</a>
        <a href="calculator.html">Saving Caculator</a>
        <a href="#">About Us</a>
    </div>

    

    <h2>Login Form</h2>

<form method="post" action="login.php">
  <div class="imgcontainer">
  <div class="grid-two imageandtext">
        <div class="imageandtext image_grid">
            <label>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDDpHDS0K4XgSKazWsCyDHO8RIH7pl5GY5pg&usqp=CAU" class="img-thumbnail">
                <input type="radio" name="category" value="staff">
                <span class="caption">
                    <span>Staff</span>
                </span>
            </label>
        </div>

        <div class="imageandtext image_grid">
            <label>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSd_bvO_o_7jpTvDDDdpVj-d10Yrlus-avqw&usqp=CAU" class="img-thumbnail">
                <input type="radio" name="category" value="student">
                <span class="caption">
                    <span>Student</span>
                </span>
            </label>
        </div>
    </div>
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <span style="align: center"> <a href="#">Forgot password?</a></span>
  </div>
</form>
</body>
</html>
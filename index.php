<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src></script>
</head>
<body>
    <div class="header">
        <h1>User Profile Form</h1>
    </div>
    <div class="form-main form-shadow">
        <div class="form-main-top">
            <img src="img/user.png">
            <h3>Signup Here</h3>
            <hr>
        </div>
        <div class="form-main-bottom">
            <form method="post" action="index.php">
                <div class="input-field">
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                    <input type="text" id="txtUsername" placeholder="Username" name="usrName">
                    <hr>
                </div>
                <div class="input-field">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input type="password" id="txtPassword" placeholder="Password" name="usrPwd">
                    <hr>
                </div>
                <div class="input-field">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <input type="text" id="txtEmail" placeholder="Email" name="usrEml">
                    <hr>
                </div>
                <div class="input-field">
                    <i class="fa fa-mobile-phone w3l-4" aria-hidden="true"></i>
                    <input type="text" id="txtMobile" placeholder="Mobile" name="usrMbl">
                    <hr>
                </div>
                <div class="input-field">
                    <input type="submit" id="btnSubmit" name="Submit" value="Submit">
                </div>
            </form>
        </div>    
    </div>
    <footer> &copy; <?php echo date("Y"); ?> user profile form. All rights reserved | Design by <a href="https://facebook.com/dupadhyay3">spyD3R</a></footer>
</body>
</html>
<?php
// $err= ["","","",""];
// $ele = ["","","",""];
// $err = $ele = array("","","","");
$err = $ele = new SplFixedArray(4); #give size to array
$scrpt="";
function val($ele, $msg, $reg){
    if(empty($ele)){
        return $msg="* Required Field";
    }else{
        if(!preg_match($reg,$ele)){
            return $msg;
        }else{
        return $msg="";}
    }
}
if(isset($_POST["Submit"])){
    $ele = array($_POST['usrName'],$_POST['usrPwd'],$_POST['usrEml'],$_POST['usrMbl']);
    $msg = array("* Only Charcater, Digits & _ Allowed","* Invalid Password. Ex. Abc@123, And Min 6 Character ", "* Invalid Email. Ex. abc.xyz.com", "* Only Digits Allowed & ");
    $regex = array("/^[a-zA-Z0-9_]*$/", "/^\S*(?=\S{6,})(?=\S*[\W])(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/", "/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$)/" , "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", "/^[6-9][0-9]{9}$/");

    $err[0]=val($ele[0],$msg[0],$regex[0]);
    $err[1]=val($ele[1],$msg[1],$regex[1]);
    $err[2]=val($ele[2],$msg[2],$regex[3]);
    $err[3]=val($ele[3],$msg[3],$regex[4]);

    if(!empty($ele[0]) && !empty($ele[1]) && !empty($ele[2]) && !empty($ele[3]) && empty($err[0]) && empty($err[1]) && empty($err[2]) && empty($err[3]) ){
        $scrpt="<script> alert('Form Validate Successfully');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
<?php echo $scrpt; ?>
    <!-- <script type = "text/javascript" language = "javascript">
        $(document).ready(function() {

            $("#btnSubmit").click(function(){
                $("#ipf1").effect( "shake", {times:2}, 1000 );
                $("#ipf1 i").effect( "shake", {times:2}, 1000 );
                $("#ipf1 hr").effect( "shake", {times:2}, 1000 );
            });
                
        }); 
    </script> -->
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
                <div id="ipf1" class="input-field">
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                    <input type="text" id="txtUsername" placeholder="Username" name="usrName" value="<?php echo $ele[0]; ?>">
                    <hr>
                    <code><?php echo $err[0]; ?></code>
                </div>
                <div id="ipf2" class="input-field">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input type="password" id="txtPassword" placeholder="Password" name="usrPwd" value="<?php echo $ele[1]; ?>">
                    <hr>
                    <code><?php echo $err[1]; ?></code>
                </div>
                <div id="ipf3" class="input-field">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <input type="text" id="txtEmail" placeholder="Email" name="usrEml" value="<?php echo $ele[2]; ?>">
                    <hr>
                    <code><?php echo $err[2]; ?></code>
                </div>
                <div id="ipf4" class="input-field">
                    <i class="fa fa-mobile-phone w3l-4" aria-hidden="true"></i>
                    <input type="text" id="txtMobile" placeholder="Mobile" name="usrMbl" value="<?php echo $ele[3]; ?>">
                    <hr>
                    <code><?php echo $err[3]; ?></code>
                </div>
                <div class="input-field">
                    <input type="submit" id="btnSubmit" name="Submit" value="Submit">
                </div>
            </form>
        </div>    
    </div>
    <footer> &copy; <?php echo date("Y"); ?> user profile form. All rights reserved | Design by <a target="_blank" href="https://facebook.com/dupadhyay3">spyD3R</a></footer>
</body>
</html>

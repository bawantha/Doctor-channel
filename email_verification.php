<?php
//    $docName=$_GET["docname"];
//    $specility=$_GET["specility"];
//    $date=$_GET["date"];

//    if($docName==""){
//
//    }elseif ($specility=="")
//
if(isset($_POST['email'])){
    ini_set("SMTP", "ssl://smtp.gmail.com");
    ini_set("smtp_port", 465);
    $token=rand(pow(10, 3),pow(10,4)-1);
    $to=$_POST["email"];
    $subject="Verification email";
    $headers = "From: binsdev5@gmail.com" . "\r\n" ;
    $txt="YOUR VERIFICATON NUMBER IS  ".$token."";
    mail($to, $subject, $txt,$headers);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>


</head>
<body>
<nav class="navbar bg-success">
    <div class="navbar-brand bg-success" >
        <img src="images/logo.png" height="50px" width="50px" >
    </div>
</nav>


<div>
    <div class="row">
        <div class="col-md-12" style="padding-top: 100px; padding-left: 50%">
            <button class="btn btn-primary" data-toggle="modal"data-target="#enteremail">Enter Mail</button>
            <button class="btn btn-primary" data-toggle="modal"data-target="#verifyemailwithPin">Verify Mail</button>



            <!-- Modal -->
            <div class="modal fade" id="enteremail" tabindex="-1" role="dialog" aria-labelledby="channelenteremail" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="channelenteremail">Enter Email address</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form  method="POST" action="email_verification.php">
                                <input type="email" name="email">
                                <button type="submit" class="btn btn-primary" id="verify">Verify</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>

            <!-- Modal -->
            <div class="modal fade" id="verifyemailwithPin" tabindex="-1" role="dialog" aria-labelledby="channelenteremail" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="verifycode">Check your email address</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form  method="POST" action="email_verification.php">
                                <lable for="code">Enter 4 digits number</lable>
                                <input type="text" name="code" id="code">
                                <button type="submit" class="btn btn-primary" id="verify">verify</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>



    </div>
</div>
</body>
</html>

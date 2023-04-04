 <?php

if($_POST["submit"]) {
    $recipient="yendheakash42@gmail.com";
    $subject="Cine Marathi StandUp Comedy Form";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["address"];
    $phone=$_POST["phone"];
    $type=$_POST["type"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n Address:$message \nPhone:$phone \nType:$type";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PHP Contact Form To Send Email On Form Submission - reusable form</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <style>
            body{
                background:#fafafa;
            }
            .contact-form{
                padding:40px ;
                box-shadow:0 0 50px 0 rgba(0,0,0,.25);
            }
            .btn{
                width:100%;
                background:#f88a3d;
                color:#fff;
                margin-bottom:10px;
            }
         p{
           
         }
        </style>
          <body >
        <div class="container">
            <div class="container form-top">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                        <div class="logo">
                            <img src="logocine.jpg" class="img-responsive" alt="">
        </div>
        
<div class="contact-form">
         <h5>Thankyou Your Message has Been Sent</h5>
    <p>
        <strong>Date :</strong> 28th March
    </p>
    <p>
        <strong>Venue:</strong> Sudarshan Theatre, Shanivaarpeth, Pune
    </p>
        </div>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
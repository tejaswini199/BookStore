<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cine Marathi Standup Comedy Registration Form</title>
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
    </head>
    <body >
        <div class="container">
            <div class="container form-top">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                        <div class="logo">
                            <img src="logocine.jpg" class="img-responsive" alt="">
        </div>
        
<div class="contact-form">
    <form method="post" action="handler.php">
        <div class="form-group">
        <label>Name:</label>
        <input type="text" name="sender" class="form-control" required>
    </div>  
    <div class="form-group">
                <label>Email address:</label>
        <input type="email" name="senderEmail" class="form-control" required>
    </div>
    <div class="form-group">
                <label>Contact Number</label>
        <input type="text" name="phone" class="form-control" required>
    </div>
    <div class="form-group">
                <label>Select Type</label>
        <select class="form-control" name="type">
                <option value="Audience">Audience</option>
                <option value="Participant">Participant</option>
        </select>
    </div>
    <div class="form-group">
        <label>Address</label>
        <textarea rows="5" cols="20" name="address" class="form-control"></textarea>
    </div>  
        <input type="submit" class="btn" name="submit" value="Submit">
    </form>
    <p>
        <strong>Date :</strong> 28th March
    </p>
    <p>
        <strong>Venue:</strong> Sudarshan Theatre, Shanivaarpeth, Pune
    </p>
     <p>
        <strong>Timing:</strong> 6:00pm To 9:00pm 
    </p>
        </div>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
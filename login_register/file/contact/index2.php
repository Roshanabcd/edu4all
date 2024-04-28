<?php

if(isset($_POST['submit'])){
    $to=$_POST['to'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    $header = "From : hackerroshan0001@gmail.com";
    
    if(mail($to,$phone,$email,$subject,$message)){
        echo "Your message has been sent\n Email Sent Successfully";
    }else{
        echo "Email Failed";
    }
    
    
}

?>


<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: #999;
        }
        .container{
            margin: 0px;
            padding: 30px;
            font-family:'Poppins', sans-serif;
            

        }
        .form_container{
            width: 50%;
            margin: 0 auto;
            padding: 5px ;
            font-size: 20px;
            text-align: center;
            background-color: #f2f2f2;
            border: 1px solid black;
        }
        .form_container h3{
            color: #007bff;
        }
        </style>
</head>
<body>
    <div class="container">
        <div class="form_container">
            <h3>Contact Form</h3>
            <form action="" method="post">
                <label for="to">Name:</label>
                <input type="text" name="to" id="name" placeholder="Enter your name">
                <span style="color:red;"></span><br><br>
                <label for="phone">Phone:</label>
                <input type="text" name="phone" id="phone" placeholder="Enter your phone">
                                
                <br><br>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="Enter your email">
                <span style="color:red;"></span><br><br>
                <label for="subject">Subject:</label>
                <input type="text" name="subject" id="subject" placeholder="Enter subject">
<br><br>

                <label for="message">Message:</label> <br>
                <textarea name="message" id="message" cols="20" rows="10" placeholder="Enter your message" maxlength="100"></textarea>  
                <br>

                <button type="submit">Submit</button><br><br>
            </form>
        </div>

    </div>
    
</body>
</html>
<?php
@include 'config.php';
if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass= md5( $_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type =$_POST['user_type'];
    $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";
    $result = mysqli_query($conn, $select); 
     
    if(mysqli_num_rows($result) > 0){
        $error[] = 'user already exist';
    }
    else{
        if($pass != $cpass){
            $error[] = 'password not matched';
        } 
        else{
            $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name', '$email', '$pass', '$user_type')";
            mysqli_query($conn, $insert);
            header('location:login_form.php');
        }
    }
        //$name = $_POST['name'];
    
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <style>
        *{
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
}
        .form-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            padding-bottom: 60px;
            background: #eee;
        }
        .form-container  form{
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
            text-align: center;
            width: 500px;
        }
        .form-container form h3{
            font-size: 30px;
            text-transform: uppercase;
            margin-bottom: 10x;
            color: #332;
        }
        .form-container form input,
        .form-container form select
        {
            text-align: center ;
            width: 100%;
            padding: 10px 15px;
            font-size: 20px;
            margin: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            color: #333;
            background: #fee;
            border-radius: 5px;
        }
        .form-container form select option{
            text-align: center;
            background: #fff;
        }
        .form-container form .form-btn{
            background: #fbd0d9;
            color: crimson;
            text-transform: capitalize;
            font-size: 20px;
            cursor: pointer;
        }
        .form-container form .form-btn:hover{
            background: crimson;
            color: #fff;
            
        }
        .form-container form p{
            margin-top: 10px;
            font-size: 20px;
            color: #333;
        }
        .form-container form p a{
            color: crimson;
            text-decoration: none;
        }
        .form-container form .error-msg{
            margin: 10px 0;
            display: block;
            color: #fff;
            font-size: 20px;
            padding: 10px;
        }

        </style>

</head>
<body>
    <div class="form-container">
        <form action="" method="post">
            <h3>Register</h3>
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-message">'.$error.'</span>';
                };
            };
            
            ?>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required placeholder="Enter your name">
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required placeholder="Enter your email">
<br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required placeholder="Enter your password">
            <br>
            <label for="password"> Confirm Password:</label>
            <input type="password" id="password" name="cpassword" required placeholder="Enter your Confirm password">
            <br>
            <select name="user_type">
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>  
            <button name="submit" type="submit" class="form-btn">Submit</button>
            <p>already have an account?<a href="login_form.php">Login</a></p>
        
        </form>
    </div>
</body>
</html>
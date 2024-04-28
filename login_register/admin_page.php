
<?
@include 'config.php';
if(!isset($_SESSION['admin_name'])){
    header('location:login_form.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
    <link rel="stylesheet" href="css/style.css">
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
.container{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    
}
.container .content{
    text-align: center;

}
.container .content h3{
    font-size: 30px;
    color: #333;
}
.container .content h3 span{
    background: crimson;
    color: whitesmoke;
    border-radius:5px ;
    padding: 0px 15px;
}
.container .content h1 {
    
    font-size: 50px;
    color: #333;

}
.container .content h1 span{
    color: crimson;

}
.container .content p{
    font-size: 25px;
    margin: 10px 10px;
}
.container .content .btn{
    display: inline-block;
    font-size: 20px;
    background: #333;
    padding: 10px 30px;
    font-weight: 500;
    color:#fff;
    margin: 0 5px;
    text-transform: capitalize;
    transition: all 0.4s ease;


}
.container .content .btn:hover{
    background: crimson;
}
        </style>



</head>
<body><div class="container">
    <div class="content">
        <h3>Hi, <span>admin</span></h3>
        <h1>Welcome <span><? echo $_SESSION['admin_name']?></span></h1>
        <p>This is an admin page</p>
        <a href="login_form.php" class="btn">login</a>
        <a href="register_form.php" class="btn">Register</a>
        <a href="file/home.php" class="btn">Home Page</a>


    </div>

</div>
</body>
</html>
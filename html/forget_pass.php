<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="main-nav">
            <img src="../img/Unity_University_logo.png" alt="" class="logo">
            <ul class="main-menu">
                <li><a href="../index.html">Home</a></li>
                <li><a href="#">Apply</a></li>
                <li><a href="#">Alumni</a></li>
                <li><a href="./html/login.html">Login</a></li>
            </ul>
        </div>
    </div>

    <div class="login">
        <div class="login-container">
            <form action="send-email.php" method="post" id="login" class="form">
                <h1>Student Login</h1>
                <div class="form-field">
                    <label for="studentid">student id:</label>
                    <input type="text" name="studentid" id="studentid" autocomplete="off" placeholder="input your student id here">
                    <small></small>
                </div>
                <div class="form-field">
                    <input type="submit" value="send email" id="sub" name="submit">
                </div>
            </form>
        </div>
    </div>



</body>

</html>
<?php
include_once('../dashboard/database.php');
require_once('../mailer/class.phpmailer.php');
?>

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
            <form action="forget_pass.php" method="post" id="login" class="form">
                <h1>Student Login</h1>
                <div class="form-field">
                    <label for="userid">student id:</label>
                    <input type="text" name="userid" id="username" autocomplete="off" placeholder="input your student id here">
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

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$mail = new PHPMailer(true);
if (isset($_POST['submit'])) {
    $user_id = $_POST['userid'];

    $result = mysqli_query($conn, "SELECT * FROM student_login where username ='" . $_POST['userid'] . "'");
    $row = mysqli_fetch_assoc($result);
    $fetch_user_id = $row['username'];
    $email_id = $row['email'];
    $password = $row['HashedPassword'];
    if ($user_id == $fetch_user_id) {
        $to = $email_id;
        $subject = "Password";
        $txt = "Your password is : $password.";
        // $headers = "From: password@studentstutorial.com" . "\r\n" .
        //     "CC: somebodyelse@example.com";
        try {
            $mail->IsSMTP();
            $mail->isHTML(true);
            $mail->SMTPDebug  = 3;
            $mail->SMTPAuth   = true;
            $mail->SMTPSecure = "ssl";
            $mail->Host       = "smtp.gmail.com";
            $mail->Port        = '465';
            $mail->AddAddress($email_id);
            $mail->Username   = "devsammy74@gmail.com";
            $mail->Password   = "devsammy74";
            $mail->SetFrom('devsammy74@gmail.com', 'sammy dev');
            $mail->AddReplyTo("devsammy74@gmail.com", "sammy dev");
            $mail->Subject    = $subject;
            $mail->Body    = $txt;
            $mail->AltBody    = $txt;
            $mail->send();
            if ($mail->Send()) {

                $msg = "Hi, Your mail successfully sent to" . $email . " ";
                echo "$msg";
            }
        } catch (phpmailerException $ex) {
            $msg = "<div class='alert alert-warning'>" . $ex->errorMessage() . "</div>";
        }
    }
}

?>
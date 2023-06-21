<?php
include_once('../dashboard/database.php');
require "vendor/autoload.php";


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

if (isset($_POST['submit'])) {
    $student_id = $_POST['studentid'];

    $result = mysqli_query($conn, "SELECT * FROM student_login where username ='" . $_POST['studentid'] . "'");
    $row = mysqli_fetch_assoc($result);
    $fetch_user_id = $row['username'];
    $name = $row['username'];
    $email_id = $row['email'];
    $password = $row['HashedPassword'];
    if ($student_id == $fetch_user_id) {
        $to = $email_id;
        $subject = "Password";
        $txt = "Your password is : $password.";

        $mail = new PHPMailer(true);

        $mail->SMTPDebug = SMTP::DEBUG_SERVER;

        $mail->isSMTP();
        $mail->SMTPAuth = true;

        $mail->Host = "smtp.gmail.com";
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->Username = "devsammy74@gmail.com";
        $mail->Password = "devsammy74";

        $mail->setFrom($to, $name);
        $mail->addAddress("tzsami591@gmail.com", "samuel");

        $mail->Subject = $subject;
        $mail->Body = $txt;

        $mail->send();

        header("Location: sent.html");
    }
}

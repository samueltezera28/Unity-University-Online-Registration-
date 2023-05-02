<?php
session_start();
unset($_SESSION["student_id"]);
unset($_SESSION["name"]);
header("Location:login.php");

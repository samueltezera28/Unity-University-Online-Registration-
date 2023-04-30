<?php
$Fname = $Lname = $B_date = $Nationality = "";
$Fnamerr = $Lnamerr = $B_daterr = $Nationalityrr = "";
$email = $gender = $comment = $website = $Phon_num = $POB = $Place = $kebele = $City = $result = "";
$emailrr = $genderrr = $commentrr = $websiterr = $Phon_numrr = $POBrr = $Placerr = $kebelerr = $cityrr = "";
$Edu_status = $division = $Department = $App_type = $reserch = $Exam_R = $Paper = $FileA = "";
$Edu_statusrr = $divisionrr = $Departmentrr = $App_typerr = $reserchrr = $Exam_Rrr = $Paperrr = $FileArr = "";
$Emrge_Name = $Emrge_phone = $Emrge_email = "";
$Emrge_Namerr = $Emrge_phonerr = $Emrge_emailrr = "";
if (isset($_POST['submit'])) {
    if (empty($_POST["Fname"])) {
        $Fnamerr = "First name is ";
    }
    if (empty($_POST["Lname"])) {
        $Lnamerr = "last name is  ";
    }

    if (empty($_POST["Nationality"])) {
        $Nationalityrr = "Nationality  is  ";
    }
    if (empty($_POST["Email"])) {
        $emailrr = "Email  is  ";
    }
    if (empty($_POST["gender"])) {
        $genderrr = "gender is  ";
    }
    if (empty($_POST["Bdate"])) {
        $B_daterr = "Bdate is  ";
    }
    if (empty($_POST["PoBox"])) {
        $POBrr = "POSTAL BO is  ";
    }
    if (empty($_POST["City"])) {
        $cityrr = "City is  ";
    }
    if (empty($_POST["place"])) {
        $Placerr = "place is  ";
    }
    if (empty($_POST["Kebele"])) {
        $kebelerr = "Kebele is  ";
    }
    if (empty($_POST["Status"])) {
        $Edu_statusrr = "Status is  ";
    }
    if (empty($_POST["Department"])) {
        $Departmentrr = "Department is  ";
    }
    if (empty($_POST["Reg_type"])) {
        $App_typerr = "Reg_type is  ";
    }
    if (empty($_POST["file"])) {
        $FileArr = "FILE is  ";
    }
    if (empty($_POST["E_fname"])) {
        $Emrge_Namerr = "E_fname is  ";
    }
    if (empty($_POST["ExamResult"])) {
        $Exam_Rrr = "ExamResult is  ";
    }

    if (empty($_POST["E_phone"])) {
        $Emrge_phonerr = "E_phone is  ";
    }
    if (empty($_POST["E_email"])) {
        $Emrge_emailrr = "E_email is  ";
    }
    if (empty($_POST['Phone'])) {
        $Phon_numrr = "insert phone number";
    }


    $Fname = filter_input(INPUT_POST, "Fname", FILTER_SANITIZE_SPECIAL_CHARS);
    empty($_POST["Email"]);
    $Lname = filter_input(INPUT_POST, "Lname", FILTER_SANITIZE_SPECIAL_CHARS);
    $Nationality = filter_input(INPUT_POST, "Nationality", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "Email", FILTER_SANITIZE_EMAIL);
    $gender = filter_input(INPUT_POST, "Gender", FILTER_SANITIZE_SPECIAL_CHARS);
    $B_date = $_POST["Bdate"];
    $Phon_num = filter_input(INPUT_POST, "Phone", FILTER_SANITIZE_NUMBER_INT);
    $City = filter_input(INPUT_POST, "City", FILTER_SANITIZE_SPECIAL_CHARS);
    $POB = filter_input(INPUT_POST, "PoBox", FILTER_SANITIZE_SPECIAL_CHARS);
    $Place = filter_input(INPUT_POST, "place", FILTER_SANITIZE_SPECIAL_CHARS);
    $kebele = filter_input(INPUT_POST, "Kebele", FILTER_SANITIZE_SPECIAL_CHARS);
    $Edu_status = filter_input(INPUT_POST, "Status", FILTER_SANITIZE_SPECIAL_CHARS);
    $division = filter_input(INPUT_POST, "Division", FILTER_SANITIZE_SPECIAL_CHARS);
    $Department = filter_input(INPUT_POST, "Department", FILTER_SANITIZE_SPECIAL_CHARS);
    $reserch = filter_input(INPUT_POST, "reserch", FILTER_SANITIZE_SPECIAL_CHARS);
    $App_type = filter_input(INPUT_POST, "Reg_type", FILTER_SANITIZE_SPECIAL_CHARS);
    $FileA = $_POST["file"];
    $Emrge_Name = filter_input(INPUT_POST, "E_fname", FILTER_SANITIZE_SPECIAL_CHARS);
    $Emrge_phone = filter_input(INPUT_POST, "E_phone", FILTER_SANITIZE_NUMBER_INT);
    $Emrge_email = filter_input(INPUT_POST, "E_email", FILTER_SANITIZE_EMAIL);
    $result = filter_input(INPUT_POST, "ExamResult", FILTER_SANITIZE_NUMBER_INT);
    if (
        empty($_POST["E_email"]) || empty($_POST["E_phone"]) || empty($_POST["ExamResult"]) || empty($_POST["E_fname"]) || empty($_POST["file"])
        || empty($App_type) || empty($Department) || empty($Edu_status) || empty($_POST["Kebele"]) || empty($_POST["place"]) || empty($_POST["City"])
        || empty($_POST["PoBox"]) || empty($_POST["Bdate"]) || empty($gender) || empty($_POST["Email"]) || empty($_POST["Nationality"]) ||
        empty($_POST["Lname"]) || empty($_POST["Fname"])
    ) {
        echo 'please input some thing';
    } else {
        /* 
        SAMI YOUR DATA BASE IS DEFINED HERE
        */
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body style="background-image: url('./img/20230428_175735.jpg');
 background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;">
    <div class="contaner">
        <h3>STUDENT SUBMISSION FORM</h3>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form first">
                <div class="personal-details">
                    <span class="info">Student Information</span>
                    <div class="form-field">
                        <div class="inpit-field">
                            <label for="">First Name <span style="color:red"><?php echo " " . $Fnamerr ?></span></label>
                            <input value="<?php echo $Fname ?>" name="Fname" type="text" placeholder="First Name">
                        </div>
                        <div class="inpit-field">
                            <label for="">Last Name <span style="color:red"><?php echo " " .  $Lnamerr ?></span></label>
                            <input value="<?php echo $Lname ?>" name="Lname" type="text" placeholder="First Name">
                        </div>

                        <div class="inpit-field">
                            <label for="">Email <span style="color:red"><?php echo " " .  $emailrr ?></span></label>
                            <input value="<?php echo $email ?>" name="Email" type="Email" placeholder="First Name">
                        </div>

                        <div class="inpit-field">
                            <label for="">BORN <span style="color:red"><?php echo " " .  $B_daterr ?></span></label>
                            <input value="<?php echo $B_date ?>" name="Bdate" type="date" placeholder="First Name">
                        </div>
                        <div class="inpit-field">
                            <label for="">GENDER <span style="color:red"><?php echo " " .  $genderrr ?></span></label>
                            <select name="Gender">
                                <option disabled selected>Select gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="other">Others</option>
                            </select>
                        </div>
                        <div class="inpit-field">
                            <label for="">Nationality <span style="color:red"><?php echo " " .  $Nationalityrr ?></span></label>
                            <input value="<?php echo $Nationality ?>" name="Nationality" type="text" placeholder="Nationality">
                        </div>
                    </div>
                </div>
                <div class="personal-details">
                    <span class="info">Student Adress</span>
                    <div class="form-field">
                        <div class="inpit-field">
                            <label for="">Mobile Number <span style="color:red"><?php echo " " .  $Phon_numrr ?></span></label>
                            <input value="<?php echo $Phon_num ?>" name="Phone" type="number" placeholder="Phone number">
                        </div>
                        <div class="inpit-field">
                            <label for="">PO.BOX <span style="color:red"><?php echo " " .  $POBrr ?></span></label>
                            <input value="<?php echo $POB ?>" name="PoBox" type="text" placeholder="PO.BOX">
                        </div>
                        <div class="inpit-field">
                            <label for="">City <span style="color:red"><?php echo " " .  $cityrr ?></span></label>
                            <input value="<?php echo $City ?>" name="City" type="text" placeholder="Place you live">
                        </div>
                        <div class="inpit-field">
                            <label for="">House NO</label>
                            <input value=" " name="House No" type="text" placeholder="House.num">
                        </div>
                        <div class="inpit-field">
                            <label for="">zone,keble <span style="color:red"><?php echo " " .  $kebelerr ?></span></label>
                            <input value="<?php echo $kebele ?>" name="Kebele" type="text" placeholder="kebele">
                        </div>
                        <div class="inpit-field">
                            <label for="">Were did you come from <span style="color:red"><?php echo " " .  $Placerr ?></span></label>
                            <select value="<?php echo $Place ?>" name="place">
                                <option disabled selected>Select place</option>
                                <option>Rular</option>
                                <option>Urban</option>
                            </select>
                        </div>
                        <button class="btn">
                            <span> Next</span>
                        </button>
                    </div>

                </div>
            </div>
            <!-- second form -->
            <div class="form second">
                <div class="adress">
                    <span class="info">APPLICATION FOR ADMISSION INFORMATION</span>
                    <div class="form-field">
                        <div class="inpit-field">
                            <label for="">Educational Background <span style="color:red"><?php echo " " .  $Edu_statusrr ?></span></label>
                            <select value="<?php $Edu_status ?>" name="Status">
                                <option disabled selected>Select Educational status</option>
                                <option value="Grade 12">Grade 12</option>
                                <option value="B.A Degree">B.A Degree</option>
                                <option value="TVET">TVET</option>
                                <option value="L3 or L4">LEVEL 3 or 4</option>
                            </select>
                        </div>
                        <div class="inpit-field">
                            <label for="">Classfication of Addmision Program <span style="color:red"><?php echo " " .  $divisionrr ?></span></label>
                            <select value="<?php echo $division ?>" name="Division">
                                <option value="regular">Regular</option>
                                <option value="extention">Extention</option>
                                <option value="distance">distance</option>
                            </select>
                        </div>
                        <div class="inpit-field">
                            <label for="">Department Applied for <span style="color:red"><?php echo " " .  $Departmentrr ?></span></label>
                            <select value="<?php echo $Department ?>" name="Department">
                                <option disabled selected>Select Department</option>
                                <option value="B.S. Coumputer science">B.S.Coumputer science</option>
                                <option value="B.S. Accounting And Finance">B.S.Accounting And Finance</option>
                                <option value="B.S. Business Adminstration">B.S.Business Adminstration</option>
                                <option value="B.S. Marketing">B.S. Marketing</option>
                                <option value="M.A. Accounting And Finance">M.A. Accounting And Finance</option>
                                <option value="M.A. Business Adminstration">M.A. Business Adminstration</option>
                                <option value="M.A. Marketing">M.A. Marketing</option>
                            </select>
                        </div>

                        <div class="inpit-field">
                            <label for="">Application Type <span style="color:red"><?php echo " " .  $App_typerr ?></span></label>
                            <select value="<?php echo $App_type ?>" name="Reg_type">
                                <option disabled selected>Select Type</option>
                                <option>Freshman</option>
                                <option>Transferee</option>
                                <option>other</option>
                            </select>
                        </div>
                        <div class="inpit-field">
                            <label for="">Have you made any research paper</label>
                            <select name="reserch">
                                <option disabled selected>Select Type</option>
                                <option>Yes</option>
                                <option>No</option>
                                <option>other</option>
                            </select>
                        </div>


                        <div class="inpit-field">
                            <label for="">ENTRANCE Exam resault <span style="color:red"><?php echo " " .  $Exam_Rrr ?></span></label>
                            <input value="<?php echo $Exam_Rrr ?>" name="ExamResult" type="number" min="350" max="700" placeholder="350">
                        </div>
                        <div></div>
                        <div class="inpit-field">
                            <label for="">Attache your paper <><span style="color:red"><?php echo " " .  $FileArr ?></span></label>
                            <input value="<?php echo $FileA ?>" type="file" name="file">
                        </div>
                    </div>
                </div>

                <div class="personal-details">
                    <span class="info">Person incase of Emrgency</span>
                    <div class="form-field">
                        <div class="inpit-field">
                            <label for="">First Name <span style="color:red"><?php echo " " .  $Emrge_Namerr ?></span></label>
                            <input value="<?php echo $Emrge_Name ?>" name="E_fname" type="text" placeholder="First Name">
                        </div>
                        <div class="inpit-field">
                            <label for="">p.num <span style="color:red"><?php echo " " .  $Emrge_phonerr ?></span></label>
                            <input value="<?php echo $Emrge_phone ?>" name="E_phone" type="number" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" placeholder="phone number">
                        </div>
                        <div class="inpit-field">
                            <label for="">Email <span style="color:red"><?php echo " " .  $Emrge_emailrr ?></span></label>
                            <input value="<?php echo $Emrge_email ?>" name="E_email" type="Email" placeholder="Email">
                        </div>
                    </div>
                    <div class="buttons">
                        <div class="bbtn">
                            <span class="btnText">back</span>
                        </div>
                        <button class="btn" name="submit">
                            <span class="btnText">Submit</span>
                        </button>
                    </div>
                </div>

            </div>
    </div>
    </form>
    </div>
    <div>
        <script src="change.js"></script>
</body>

</html>
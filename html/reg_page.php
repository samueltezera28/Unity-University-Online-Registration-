<?php
// include('../database.php');
$Fname = $Lname = $B_date = $password = $Nationality = "";
$email = $gender = $comment = $website = $Phon_num = $POB = $Place = $kebele = $City = $result = "";
$Edu_status = $division = $Department = $App_type = $reserch = $Exam_R = $Paper = $FileA = "";
$Emrge_Name = $Emrge_phone = $Emrge_email = "";
if (isset($_POST['submit'])) {
    $Fname = filter_input(INPUT_POST, "Fname", FILTER_SANITIZE_SPECIAL_CHARS);
    $Lname = filter_input(INPUT_POST, "Lname", FILTER_SANITIZE_SPECIAL_CHARS);
    $Nationality = filter_input(INPUT_POST, "Nationality", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "Email", FILTER_SANITIZE_EMAIL);
    $gender = filter_input(INPUT_POST, "gender", FILTER_SANITIZE_SPECIAL_CHARS);
    $B_date = $_POST["Bdate"];
    $password = md5($_POST['password']);
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
}
// sami melkew database uncombatable nw be ene sertwal bante rase astekaklew
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/reg.css">
</head>

<body>
    <div>
        <nav>
            <img src="../img/unity.png" alt="">
            <div class="navigation">
                <ul>
                    <i id="menu-close" class="fas fa-times"></i>
                    <li><a class="active" href="home.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="announcement.html">Announcement</a></li>
                    <li><a href="./Register.php">Register</a></li>
                    <li><a href="./login.php">Login</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div id="A" class="lala">
            <div class="wrapper">
                <div class="title">
                    Registration Form
                </div>
                <div class="form">
                    <div class="inputfield">
                        <label>First Name</label>
                        <input name="Fname" required type="text" class="input">
                    </div>
                    <div class="inputfield">
                        <label>Last Name</label>
                        <input name="Lname" required type="text" class="input">
                    </div>
                    <div class="inputfield">
                        <label>Password</label>
                        <input name="Password" required type="password" class="input">
                    </div>
                    <div class="inputfield">
                        <label>Birth Date</label>
                        <input name="Bdate" required type="date" class="input" placeholder="Birth Date">
                    </div>
                    <div class="inputfield">
                        <label>Nationality</label>
                        <input name="Nationality" required type="text" class="input">
                    </div>
                    <div class="inputfield">
                        <label>Gender</label>
                        <div class="custom_select">
                            <select name="gender" required>
                                <option value="">Select</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="inputfield">
                        <label>Email Address</label>
                        <input name="Email" required type="text" class="input">
                    </div>
                    <div class="inputfield">
                        <label>Phone Number</label>
                        <input name="Phone" required type="text" class="input">
                    </div>
                    <div class="inputfield">
                        <label>City</label>
                        <input name="city" required type="text" class="input">
                    </div>
                    <div class="inputfield">
                        <label>Address</label>
                        <input name="address" required type="text" class="input">
                    </div>
                    <div class="inputfield">
                        <label>Postal Code</label>
                        <input name="PoBox" required type="text" class="input">
                    </div>
                    <div class="inputfield">
                        <label for="">House NO</label>
                        <input name="Houseno" class="input" name="House No" required type="text" placeholder="House.num">
                    </div>
                    <div class="inputfield">
                        <label for="">zone,keble</label>
                        <input class="input" name="kebele" name="Kebele" required type="text" placeholder="kebele">
                    </div>
                    <div class="inputfield">
                        <label for="">Were did you come from </label>
                        <div class="custom_select">
                            <select name="place" required name="place">
                                <option disabled selected>Select place</option>
                                <option>Rular</option>
                                <option>Urban</option>
                            </select>
                        </div>
                    </div>
                    <div class="inputfield">
                        <input id="btn1" type="submit" value="Next Page" class="btn">
                    </div>
                </div>
            </div>

        </div>
        <div class="setActive" id="B">
            <div class="wrapper">
                <div class="title">
                    APPLICATION FOR ADMISSION INFORMATION
                </div>
                <div class="form">
                    <div class="inputfield"">
                            <label for="">Educational Background</label>
                    <div class=" custom_select">
                        <select required name=" Status">
                            <option disabled selected>Select Educational status</option>
                            <option value="Grade 12">Grade 12</option>
                            <option value="B.A Degree">B.A Degree</option>
                            <option value="TVET">TVET</option>
                            <option value="L3 or L4">LEVEL 3 or 4</option>
                        </select>
                    </div>
                </div>
                <div class="inputfield">
                    <label for="">Classfication of Addmision Program </label>
                    <div class="custom_select">
                        <select required name="Division">
                            <option value="regular">Regular</option>
                            <option value="extention">Extention</option>
                            <option value="distance">distance</option>
                        </select>
                    </div>
                </div>
                <div class="inputfield">
                    <label for="">Department Applied for </label>
                    <div class="custom_select">
                        <select required name="Department">
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
                </div>
                <div class="inputfield">
                    <label for="">Application Type </label>
                    <div class="custom_select">
                        <select required name="Reg_type">
                            <option disabled selected>Select Type</option>
                            <option>Freshman</option>
                            <option>Transferee</option>
                            <option>other</option>
                        </select>
                    </div>
                </div>
                <div class="inputfield">
                    <label for="">Have you made any research paper</label>
                    <div class="custom_select">
                        <select required name="reserch">
                            <option disabled selected>Select Type</option>
                            <option>Yes</option>
                            <option>No</option>
                            <option>other</option>
                        </select>
                    </div>
                </div>
                <div class="inputfield">
                    <label for="">ENTRANCE Exam resault </label>
                    <input class="input" required name="ExamResult" type="number" min="350" max="700" placeholder="350">
                </div>
                <div class="inputfield">
                    <label for="">Attache your paper </label>
                    <input class="input" type="file" required name="file">
                </div>
                <div class="title">
                    Person incase of Emrgency
                </div>
                <div class="inputfield">
                    <label for="">First Name </label>
                    <input class="input" required name="E_fname" type="text" placeholder="First Name">
                </div>
                <div class="inputfield">
                    <label for="">Emrgency phone </label>
                    <input class="input" required name="E_phone" type="number" placeholder="09" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" placeholder="phone number">
                </div>
                <div class="inputfield">
                    <label for="">Email</label>
                    <input class="input" required name="E_email" type="Email" placeholder="Email">
                </div>
                <div class="inputfield terms">
                    <label class="check">
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    <p>Agreed to terms and conditions</p>
                </div>
                <div class="inputfield">
                    <input id="btn2" type="submit" value="Back" class="btn">
                </div>
                <div class="inputfield">
                    <input type="submit" name="submit" value="Register" class="btn">
                </div>
                <!-- <div class="inputfield">
                <button class="btn" name="submit">Register</button>
            </div> -->
            </div>
        </div>
        </div>
    </form>
    <script src="../script/change.js"></script>
</body>


</html>
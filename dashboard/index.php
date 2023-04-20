<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
    <title>Student Dashboard</title>

</head>

<body>
    <div class="header">
        <h1>Student Dashboard</h1>
    </div>
    <div class="container-wrapper">
        <div class="nav">
            <ul>
                <li><a href="#" onclick="showHome() "><i class="fa fa-home"></i>Home</a></li>
                <li><a href="#" onclick="showPlanning()"><i class="fa fa-calendar"></i>My Planning</a></li>
                <li><a href="#" onclick="showCourse()"><i class="fa fa-graduation-cap"></i> Course</a></li>
                <li><a href="#" onclick="showBooks()"><i class="fa fa-book"></i>Books/Modules</a></li>
                <li><a href="#" onclick="showGrade()"><i class="fa fa-calculator"></i>Grade</a></li>
                <li><a href="#" onclick="showProfile()"><i class="fa fa-user"></i>My Profile</a></li>
            </ul>
        </div>
        <div id="container">
            <h2>Welcome to the Student Dashboard!</h2>
            <p></p>
        </div>
    </div>
    <script>
        function showHome() {
            document.getElementById("container").innerHTML = "<h2>Home</h2><p>Welcome to your Home page.</p>";
        }

        function showPlanning() {
            document.getElementById("container").innerHTML = "<h2>My Planning</h2><p>This is for planning</p>";
        }

        function showCourse() {
            document.getElementById("container").innerHTML = "<h2>Course</h2><p>This is the Course page.</p>";
        }

        function showBooks() {
            document.getElementById("container").innerHTML = "<h2>Books/Modules</h2><p>This is the books and modules page.</p>";
        }

        function showGrade() {
            document.getElementById("container").innerHTML = "<h2>Grade</h2><p>This is your Grade page.</p>";
        }

        function showProfile() {
            document.getElementById("container").innerHTML = "<h2>My Profile</h2><p>Here you can view and edit your profile.</p>";
        }
    </script>
</body>

</html>
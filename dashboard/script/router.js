function showHome() {
    var container = document.querySelector('.container');

    // Create an instance of XMLHttpRequest object
    var xhttp = new XMLHttpRequest();

    // Define a callback function to be executed when the AJAX request is complete
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Insert the contents of the fetched HTML file into the container element
            container.innerHTML = this.responseText;
        }
    };

    // Open the AJAX request and specify the URL of the HTML file to fetch
    xhttp.open("GET", "./home.php", true);

    // Send the AJAX request
    xhttp.send();
    //document.getElementById("container").innerHTML = "<h2>Home</h2><p>Welcome to your Home page.</p>";
}

function showPlanning() {
    var container = document.querySelector('.container');

    // Create an instance of XMLHttpRequest object
    var xhttp = new XMLHttpRequest();

    // Define a callback function to be executed when the AJAX request is complete
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Insert the contents of the fetched HTML file into the container element
            container.innerHTML = this.responseText;
        }
    };

    // Open the AJAX request and specify the URL of the HTML file to fetch
    xhttp.open("GET", "./planning.php", true);

    // Send the AJAX request
    xhttp.send();

    //var plann = document.getElementById("container");
    // plann.innerHTML s
    // // document.getElementById("container").innerHTML = "<h2>My Planning</h2><p>This is for planning</p>";
}

function showCourse() {
    var container = document.querySelector('.container');

    // Create an instance of XMLHttpRequest object
    var xhttp = new XMLHttpRequest();

    // Define a callback function to be executed when the AJAX request is complete
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Insert the contents of the fetched HTML file into the container element
            container.innerHTML = this.responseText;
        }
    };

    // Open the AJAX request and specify the URL of the HTML file to fetch
    xhttp.open("GET", "./courses.php", true);

    // Send the AJAX request
    xhttp.send();

    //document.getElementById("container").innerHTML = "<h2>Course</h2><p>This is the Course page.</p>";
}

function showBooks() {
    var container = document.querySelector('.container');

    // Create an instance of XMLHttpRequest object
    var xhttp = new XMLHttpRequest();

    // Define a callback function to be executed when the AJAX request is complete
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Insert the contents of the fetched HTML file into the container element
            container.innerHTML = this.responseText;
        }
    };

    // Open the AJAX request and specify the URL of the HTML file to fetch
    xhttp.open("GET", "./books.php", true);

    // Send the AJAX request
    xhttp.send();
    //document.getElementById("container").innerHTML = "<h2>Books/Modules</h2><p>This is the books and modules page.</p>";
}

function showGrade() {
    var container = document.querySelector('.container');

    // Create an instance of XMLHttpRequest object
    var xhttp = new XMLHttpRequest();

    // Define a callback function to be executed when the AJAX request is complete
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Insert the contents of the fetched HTML file into the container element
            container.innerHTML = this.responseText;
        }
    };

    // Open the AJAX request and specify the URL of the HTML file to fetch
    xhttp.open("GET", "./grade.php", true);

    // Send the AJAX request
    xhttp.send();
  //  document.getElementById("container").innerHTML = "<h2>Grade</h2><p>This is your Grade page.</p>";
}

function showProfile() {
    var container = document.querySelector('.container');

    // Create an instance of XMLHttpRequest object
    var xhttp = new XMLHttpRequest();

    // Define a callback function to be executed when the AJAX request is complete
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Insert the contents of the fetched HTML file into the container element
            container.innerHTML = this.responseText;
        }
    };

    // Open the AJAX request and specify the URL of the HTML file to fetch
    xhttp.open("GET", "./myProfile.php", true);

    // Send the AJAX request
    xhttp.send();
   // document.getElementById("container").innerHTML = "<h2>My Profile</h2><p>Here you can view and edit your profile.</p>";
}

function showevents() {
    var container = document.querySelector('.container');

    // Create an instance of XMLHttpRequest object
    var xhttp = new XMLHttpRequest();

    // Define a callback function to be executed when the AJAX request is complete
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Insert the contents of the fetched HTML file into the container element
            container.innerHTML = this.responseText;
        }
    };

    // Open the AJAX request and specify the URL of the HTML file to fetch
    xhttp.open("GET", "./temp.html", true);

    // Send the AJAX request
    xhttp.send();
   // document.getElementById("container").innerHTML = "<h2>My Profile</h2><p>Here you can view and edit your profile.</p>";
}



function calculateGPA() {
    var table = document.getElementById("gpa-table-body");
    var rows = table.getElementsByTagName("tr");
    var totalCreditHours = 0;
    var totalGradePoints = 0;

    for (var i = 0; i < rows.length; i++) {
        var creditHoursInput = rows[i].querySelector(".credit-hours");
        var gradeInput = rows[i].querySelector(".grade");


        var creditHours = parseFloat(creditHoursInput.value);
        var grade = gradeInput.value;
        console.log(creditHours);
        console.log(grade);

        if (!isNaN(creditHours)) {
            totalCreditHours += creditHours;
            totalGradePoints += calculateGradePoints(grade) * creditHours;
        }
    }

    var gpa = totalGradePoints / totalCreditHours;
    console.log(gpa)
    if (isNaN(gpa) || !isFinite(gpa)) {
        document.getElementById("gpa").innerHTML = "-";
    } else {
        document.getElementById("gpa").innerHTML = gpa.toFixed(2);
    }
}

function calculateGradePoints(grade) {
    switch (grade) {
        case "A+":
            return 4.0;
        case "A":
            return 4.0;
        case "A-":
            return 3.7;
        case "B+":
            return 3.3;
        case "B":
            return 3.0;
        case "B-":
            return 2.7;
        case "C+":
            return 2.3;
        case "C":
            return 2.0;
        case "C-":
            return 1.7;
        case "D+":
            return 1.3;
        case "D":
            return 1.0;
        case "F":
            return 0.0;
        default:
            return 0.0;
    }
}

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
    xhttp.open("GET", "./temp.html", true);

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
    xhttp.open("GET", "./temp.html", true);

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
    xhttp.open("GET", "./temp.html", true);

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
    xhttp.open("GET", "./temp.html", true);

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
    xhttp.open("GET", "./temp.html", true);

    // Send the AJAX request
    xhttp.send();
   // document.getElementById("container").innerHTML = "<h2>My Profile</h2><p>Here you can view and edit your profile.</p>";
}
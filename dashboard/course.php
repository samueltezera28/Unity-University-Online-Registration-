<!DOCTYPE html>
<html>

<head>
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="./css/course.css">
</head>

<body>
    <h1>Student Dashboard</h1>

    <div class="search-bar">
        <input type="text" id="search-input" placeholder="Search by title or instructor name">
        <button onclick="searchResources()">Search</button>
    </div>

    <ul class="resource-list">
        <li class="resource-item">
            <img src="../img/book1.jpeg" alt="Book 1" class="resource-image">
            <h3>Book Module 1</h3>
            <a href="path_to_book_module1.pdf" class="download-button">Download</a>
        </li>
        <li class="resource-item">
            <img src="../img/book2.jpeg" alt="Book 2" class="resource-image">
            <h3>advanceddatabase</h3>
            <a href="path_to_book_module2.pdf" class="download-button">Download</a>
        </li>
        <li class="resource-item">
            <img src="../img/book3.jpeg" alt="Book 3" class="resource-image">
            <h3>Book Module 3</h3>
            <a href="path_to_book_module3.pdf" class="download-button">Download</a>
        </li>
        <li class="resource-item">
            <img src="../img/book1.jpeg" alt="Book 1" class="resource-image">
            <h3>Book Module 1</h3>
            <a href="path_to_book_module1.pdf" class="download-button">Download</a>
        </li>
        <li class="resource-item">
            <img src="../img/book2.jpeg" alt="Book 2" class="resource-image">
            <h3>Book Module 2</h3>
            <a href="path_to_book_module2.pdf" class="download-button">Download</a>
        </li>
        <li class="resource-item">
            <img src="../img/book3.jpeg" alt="Book 3" class="resource-image">
            <h3>Book Module 3</h3>
            <a href="path_to_book_module3.pdf" class="download-button">Download</a>
        </li>
        <li class="resource-item">
            <img src="../img/book1.jpeg" alt="Book 1" class="resource-image">
            <h3>Book Module 1</h3>
            <a href="path_to_book_module1.pdf" class="download-button">Download</a>
        </li>
        <li class="resource-item">
            <img src="../img/book2.jpeg" alt="Book 2" class="resource-image">
            <h3>Book Module 2</h3>
            <a href="path_to_book_module2.pdf" class="download-button">Download</a>
        </li>

    </ul>

    <script>
        function searchResources() {
            var input = document.getElementById("search-input").value.toLowerCase();
            var resources = document.getElementsByClassName("resource-item");

            for (var i = 0; i < resources.length; i++) {
                var resource = resources[i];
                var link = resource.getElementsByTagName("a")[0];
                var title = link.previousElementSibling.innerHTML.toLowerCase();

                if (title.includes(input)) {
                    resource.style.display = "block";
                } else {
                    resource.style.display = "none";
                }
            }
        }
    </script>
</body>

</html>
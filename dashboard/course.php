<?php
include("database.php");
?>

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
        <button onclick="searchResources() ">Search</button>
    </div>

    <ul class="resource-list">
        <li class="resource-item">
            <img src="../img/book1.jpeg" alt="Book 1" class="resource-image">
            <h3>Book Module 1</h3>
            <a href="path_to_book_module1.pdf" class="download-button">Download</a>
        </li>
        <?php
        $sql = "SELECT * FROM book_download";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo " <li class=\"resource-item\">";
                echo "<img src=\"{$row['file_img']}\" alt=\"{$row['title']}\" class=\"resource-image\">";
                echo "<h3>{$row['title']}</h3>";
                echo " <a href=\"{$row['file_pdf']}\" class=\"download-button\">Download</a>";
                echo " </li>";
            }
        }
        ?>

    </ul>

    <script>
        function searchResources() {
            console.log("heyy");
            var input = document.getElementById("search-input").value.toLowerCase();
            var resources = document.getElementsByClassName("resource-item");

            console.log("Search Input:", input);
            console.log("Total Resources:", resources.length);

            for (var i = 0; i < resources.length; i++) {
                var resource = resources[i];
                var link = resource.getElementsByTagName("a")[0];
                var title = link.previousElementSibling.innerHTML.toLowerCase();

                console.log("Resource Title:", title);
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
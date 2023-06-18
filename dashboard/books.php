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
    <h1>Once you learn to read you will be forever free. -Frederick Douglas</h1>

    <div class="search-bar">
        <form action="./books.php" method="post">
            <input type="text" name="book" id="search-input" placeholder="Search by title or instructor name">
            <button type="submit" name="save">Search</button>
        </form>

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
    <?php
    error_reporting(0);
    // $conn = mysqli_connect("localhost","root","","student");
    if (count($_POST) > 0) {
        $book = $_POST['book'];
        echo "{$book}.heyyyyy";
        $result = mysqli_query($conn, "SELECT * FROM book_download where title like'$book%' ");
        if ($result->num_rows > 0) {
            echo "<ul class=\"resource-list\">";
            while ($row = $result->fetch_assoc()) {
                echo " <li class=\"resource-item\">";
                echo "<img src=\"{$row['file_img']}\" alt=\"{$row['title']}\" class=\"resource-image\">";
                echo "<h3>{$row['title']}</h3>";
                echo " <a href=\"{$row['file_pdf']}\" class=\"download-button\">Download</a>";
                echo " </li>";
            }
            echo "</ul>";
        }
    }
    ?>
    <script>
        function searchResources() {
            console.log("heyy");
        }
    </script>
</body>

</html>
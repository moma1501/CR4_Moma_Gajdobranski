<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "components/db_connect.php";

if (isset($_POST["submit"])) {
    $title = $_POST["title"];
    $author_first_name = $_POST["author_first_name"];
    $author_last_name = $_POST["author_last_name"];
    $ISBN_code = $_POST["ISBN_code"];
    $short_description = $_POST["short_description"];
    $publisher_name = $_POST["publisher_name"];
    $publisher_address = $_POST["publisher_address"];
    $publish_date = $_POST["publish_date"];
    $image = $_POST["image"];
    $type = $_POST["type"];

    $sql = "INSERT INTO `media` (`title`, `author_first_name`, `author_last_name`, `ISBN_code`,`short_description`,
                        `publisher_name`,`publisher_address`,`publish_date`,`image`, `type`) 
            VALUES 
                        ('$title', '$author_first_name', '$author_last_name', '$ISBN_code', '$short_description', 
                        '$publisher_name' , '$publisher_address', '$publish_date','$image', '$type')";

    if (mysqli_query($connect, $sql)) {
        echo "<div class='alert alert-success' role='alert'>
            New media has been created!
          </div>";

        header("refresh: 3; url= index.php");
    } else {
        echo "<div class='alert alert-danger' role='alert'>
            Error found.
          </div>";
    }
}

mysqli_close($connect);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

<?php require_once "components/navbar.php"; ?>
   

<form action="" method="post"> 
    <input type="text" name="title" placeholder="Enter title" class="form_control">
    <input type="text" name="author_first_name" placeholder="Enter Authors First Name" class="form_control">
    <input type="text" name="author_last_name" placeholder="Enter Authors Last Name" class="form_control">
    <input type="number" name="ISBN_code" placeholder="Enter ISBN" class="form_control">
    <input type="text" name="short_description" placeholder=" Madia description" class="form_control">
    <input type="text" name="publisher_name" placeholder=" Publisher name" class="form_control">
    <input type="text" name="publisher_address" placeholder=" Publisher address" class="form_control">
    <input type="date" name="publish_date" placeholder=" Publish date" class="form_control">
    <input type="text" name="image" placeholder="Enter image URL" class="form_control">

        <select name="type">
            <option value="dvd">DVD</option>
            <option value="book">Book</option>
            <option value="cd">CD</option>
      </select>
   <input type="submit" name="submit" value="Create" class="btn btn-success">

</form>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>

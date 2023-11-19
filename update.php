<?php
    require_once "components/db_connect.php";
  

 
    $sql = "SELECT * FROM `media` WHERE id = $_GET[id]";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);


    if(isset($_POST["submit"])){
       
        $title = $_POST["title"];
        $author_last_name = $_POST["author_last_name"];
        $ISBN_code = $_POST["ISBN_code"];
        $type = $_POST["type"];
        $image = $_POST["image"];


    
            $sql = "UPDATE `media` SET `title` = '$title', `author_last_name` = '$author_last_name', `ISBN_code`=$ISBN_code , `type` = '$type' , `image` = '$image' WHERE `id` = $_GET[id]";
   
        if(mysqli_query($connect, $sql)){
            echo "<div class='alert alert-success' role='alert'>
            All goody.
          </div>";
        }else {
            echo "<div class='alert alert-danger' role='alert'>
            something is wrong, try it again :(
          </div>";
        }
    }
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
    <input type="text" name="title" placeholder="Enter title" class="form_control" value="<?=$row["title"]; ?>">
    <input type="number" name="ISBN_code" placeholder="Enter ISBN" class="form_control" value="<?=$row["ISBN_code"]; ?>">
    <input type="text" name="image" placeholder="Enter image URL " class="form_control" value="<?=$row["image"]; ?>">
    <select name="type">
        <option value="dvd" <?php echo $row["type"] == "dvd" ? "selected" : "" ?>>DVD</option>
        <option value="book" <?php echo $row["type"] == "book" ? "selected" : "" ?>>Book</option>
        <option value="cd" <?php echo $row["type"] == "cd" ? "selected" : "" ?>>CD</option>
   </select>
   <input type="submit" name="submit" value="Update" class="btn btn-success">

</form>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>
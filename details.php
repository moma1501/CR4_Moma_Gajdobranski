<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


    require_once "components/db_connect.php";

     $sql = "SELECT * FROM `media` WHERE id = $_GET[id]";
     $result = mysqli_query($connect, $sql);
     $row = mysqli_fetch_assoc($result);


            $card = " 
                <div class= 'p-2'>
                  <div class='card' >
                    <img src='$row[image]'  class='card-img-top' alt='...'>
                    <div class='card-body'>
                        <h5 class='card-title'>{$row["title"]}</h5>
                        <p class='card-text'>{$row["ISBN_code"]}</p>
                        <p class='card-text'>{$row["short_description"]}</p>
                        <p class='card-text'>{$row["type"]}</p>
                        <p class='card-text'>{$row["author_first_name"]}</p>
                        <p class='card-text'>{$row["author_last_name"]}</p>
                        <p class='card-text'>{$row["publisher_name"]}</p>
                        <p class='card-text'>{$row["publisher_address"]}</p>
                        <p class='card-text'>{$row["publish_date"]}</p>
                        <a href='update.php?id={$row["id"]}' class='btn btn-warning'>Update</a>
                        <a href='delete.php?id={$row["id"]}' class='btn btn-danger'>Delete</a>
                        <a href='details.php?id={$row["id"]}' class='btn btn-success'>Show details</a>
                </div>
             </div>
          </div>
        ";
        
    
   
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Big Library</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>

    <body>

    <?php require_once 'components/navbar.php' ; ?>

    <div class="container">
      
            <?= $card; ?>
         </div>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>
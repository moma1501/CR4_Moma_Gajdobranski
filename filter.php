<?php
    require_once "components/db_connect.php";

    $sql = "SELECT * FROM `media` WHERE `type` = 'CD'";

     $result = mysqli_query($connect, $sql);

    $cards = "";

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $cards .= "<div>
                <div class='card' style='width: 18rem;'>
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
          </div>";
        }
    }

    mysqli_close($connect);
?>

<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Big Library</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
      <?php require_once 'components/navbar.php' ?>

    <div class="container mt-5">
   
        <h1 class="mt-5">Our Big Library!</h1>
        <div class="row row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-sm-1 row-cols-xs-1">
            <?= $cards ?>
        </div>
    </div>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>
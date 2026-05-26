<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <h1>learning php</h1>
    <!--form input-->
    <form action ="" method="post">
        <label for="username">username:</label>
        <input type="text" placeholder="Enter username" name="username">
        <button type="submit">submit</button>
    </form>

   <?php
    echo "hello students<br>" ;
    //declaring variables
     $name="jane";
     $age=15;
     $work="joker";
     $price=1000 ; 

     echo "$name. <br>";
     echo "$age. <br>";
     echo "$work. <br>";
     echo "$price. <br>";

     //handling form submission
    $username = $_POST["username"];
    echo $username;



    ?>
    

</body>
</html>
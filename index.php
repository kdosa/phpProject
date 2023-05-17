<?php
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection failed due to ". mysqli_connect_error());
    }
    // echo"connected successfully";

    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $number = $_POST['number'];
    $desc = $_POST['desc'];

    $sql = "INSERT INTO `trip`.`trip` (`Name`, `Age`, `Email`, `Phone`, `People`, `Other`, `Date`) 
    VALUES ('$name', '$age', '$email', '$phone', '$number', '$desc', current_timestamp());";

    // echo $sql;

    if($con->query($sql) == true){
        // echo "successfully inserted";
    }
    else{
        echo "Error: $sql <br> $con->error";
    }

    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Book a Trip</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">"
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="bg"></div>
    <div class="container">
        <h1>Welcome to India Trip Form</h1>
        <p>Please enter your details and submit this form
            to confirm your participation in the trip.
        </p>

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone number">
            <input type="number" name="number" id="number" max="10" min="1" placeholder="Enter number of people">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any comments or requests"></textarea>
            <button class="btn">Submit</button>
           
        </form>
    </div>
    <script src="index.js"></script>
    
</body>
</html>

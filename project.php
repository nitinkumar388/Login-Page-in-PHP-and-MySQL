<?php
$insert = false;
if(isset($_POST['name']))
{
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server,$username,$password);

if(!$con)
{
    die("connection to this database failed due to" . mysqli_connect_error());

}
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];
$sql = "INSERT INTO `project`.`rkgit`(`name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())";
//echo $sql;

if($con->query($sql) == true)
{
    $insert = true;
}

else{
    echo "error: $sql <br> $con->error";

}
$con->close();

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RKGIT FORM</title>

    <link rel="stylesheet" href="style.css">


</head>
<body>
    <img class="lol" src="lol.jpeg" alt="RKGIT">
    <div class="container">
        <h1>Welcome To RKGIT</h1>
        <p>Enter your Details</p>

        <?php
        if($insert == true){
        echo "<p class='pop'> Thanks for submiting your form</p>";
        }

    ?>


        

        <form action="project.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="text" name="email" id="email" placeholder="Enter your email">
            <input type="text" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="any other information here"></textarea>
            <button class="btn">Submit</button>
    

        </form>


    </div>
    <script src="index.js"></script>
</body>
</html>
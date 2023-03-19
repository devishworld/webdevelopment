<?php
$insertconf = false;
if (isset($_POST['name'])){
$server = "localhost";
$user = "root";
$password = "";
$dbname = "survey";

$con = mysqli_connect($server,$user,$password,$dbname);

if(!$con){
    die("Connection with database not happening due to". mysqli_connect_error());
}
$name =$_POST['name'];
$mobile =$_POST['mobile'];
$email =$_POST['email'];
$age =$_POST['age'];
$gender =$_POST['gender'];
$message =$_POST['message'];

$sql_query = "INSERT INTO `survey` (`name`, `mobile`, `email`, `age`, `gender`, `message`) VALUES ('$name', '$mobile', '$email', '$age', '$gender', '$message');";

if ($con->query($sql_query) ==true){
    $insertconf=true;
}else{
    echo "ERROR : $sql_query <br> $con->error";
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
    <title>Survey Form</title>
    <style>
        body{
            background-color: black;
            color: white;
        }
        .container{
            text-align: center;
        }
        input, textarea{
            margin-bottom: 8px;
        }
        #confirm h1{
            color: yellow;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to my survey Page &#9997;</h1>
        <p>Enter your details so that we can contact you in future.&#128526;</p>
        <div id="confirm">
        <?php
        if($insertconf==true){
            echo "<h1>Thank you for filling out the survey form.</h1>";
        }
        ?>
        </div>
        <form action="" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name." required><br>
            <input type="text" name="mobile" id="mobile" placeholder="Mobile Number" required><br>
            <input type="email" name="email" id="email" placeholder="Email Id" required><br>
            <input type="text" name="age" id="age" placeholder="Enter Age"><br>
            <input type="text" name="gender" id="gender" placeholder="Enter Gender"><br>
            <textarea name="message" id="message" cols="22" rows="2"></textarea><br>
            <button type="submit" id="submitBtn" style="display: none;">Submit</button>
            <button type="reset">Reset</button>
        </form>
    </div>

    <script>
    var messageInput = document.getElementById('message');
    var submitBtn = document.getElementById('submitBtn');
    messageInput.addEventListener('input', function() {
        if (messageInput.value.trim().length > 0) {
            submitBtn.style.display = 'inline';
        } else {
            submitBtn.style.display = 'none';
        }
    });
</script>
</body>
</html>

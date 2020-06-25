
<?php
  $insert=false;
  if(isset($_POST['name']))
  {
    $server ="localhost";
    $username= "root";
    $password ="";

    $con = mysqli_connect($server,$username,$password);

    if(!$con){
        die("connection to this database failed ,reason".mysqli_connect_error());
    }
    $name=$_POST['name'];
    $email=$_POST['email'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $phone=$_POST['phone'];
    $desc=$_POST['desc'];

    $sql= "INSERT INTO `trip`.`trip` ( `name`, 
    `age`, `gender`, `email`, `phone`,
    `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email',
    '$phone', '$desc', current_timestamp())";

    if($con ->query(($sql))== true)
    {
     $insert=true;
    }
    else
    {
     echo "Error :". $sql ."<br>". $con ->error;
    }
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="soa.jpg" alt="soa">
    <div class="container">
     <h3>Welcome to ITER Travel form</h3>   
     <p>Enter your details to confirm this trip</p>
     <?php
     if($insert==true)
     {
     echo "<p class='asubmit'> See you near ITER bus stand ,have a nice day.</p>";
     }
     ?>
     <form action="index.php" method="post">
         <input type ="text" name="name" id="name" placeholder="Enter your name">
         <input type ="text" name="age" id="age" placeholder="Enter your age">
         <input type ="text" name="gender" id="gender" placeholder="Enter your gender(M/F)">
         <input type="email" name="email" id="email" placeholder="Enter your Email">
         <input type="phone" name="phone" id="phone" placeholder="Enter you mobile no."> 
         <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter other information"></textarea>
         <button class="btn">Submit</button>     
        </form>
    </div>
</body>
</html>
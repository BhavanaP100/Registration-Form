<?php
$name     = htmlspecialchars($_POST['name']);
$email    = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']); 
$gender   = htmlspecialchars($_POST['gender']);
$dob      = htmlspecialchars($_POST['dob']);
$phone    = htmlspecialchars($_POST['phone']);
$course   = htmlspecialchars($_POST['course']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registration Successful</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(135deg, #74ebd5, #9face6);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .success-container {
      background: #fff;
      padding: 25px 30px;
      border-radius: 12px;
      box-shadow: 0px 8px 20px rgba(0,0,0,0.2);
      width: 400px;
      text-align: center;
    }
    h2 {
      color: #333;
      margin-bottom: 20px;
    }
    p {
      margin: 8px 0;
      font-size: 15px;
      color: #444;
    }
    span {
      font-weight: bold;
      color: #6c63ff;
    }
  </style>
</head>
<body>
  <div class="success-container">
    <h2>Registration Successful !</h2>
    <p><span>Name:</span> <?php echo $name; ?></p>
    <p><span>Email:</span> <?php echo $email; ?></p>
    <p><span>Password:</span> <?php echo $password; ?></p>
    <p><span>Gender:</span> <?php echo $gender; ?></p>
    <p><span>Date of Birth:</span> <?php echo $dob; ?></p>
    <p><span>Phone:</span> <?php echo $phone; ?></p>
    <p><span>Course:</span> <?php echo $course; ?></p>
  </div>
</body>
</html>

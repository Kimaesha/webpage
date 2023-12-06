<!DOCTYPE html>
<html>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Agbalumo&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: #e0e0e0;">
    <h1>Register</h1>
    <form method="post" action="dbconnt.php">
        <input type="text" id="username" name="username" placeholder="Username" required><br><br>
        <input type="password" id="passward" name="passward" placeholder="Password" required><br><br>
        <input type="submit" value="Register">
        
    </form>
</body>
</html>

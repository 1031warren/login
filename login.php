<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <script src="validate.js"></script>  
</head>
<body>
    <!-- This will include the header info, including a menu -->
    <?php include 'header.php'; ?>
   <br>
   <div id="errorMessage"></div>
   <br>
   <form name="userForm" onsubmit="return validateForm();">
    <!-- Get the username-->
    <label for="userName" id="iblUserName">User Name:</label>
    <input type="text" name="userName" id="userName">
    <br>
    <br>
    <label for="userPassword" id="IblPassword">Passward: </label>
    <input type="password" name="userPassword" id="userPassword">
    <br>
    <br>
    <button type="submit">Submit</button>
</form>

  <!--This will include the footer info -->
  <?php include 'footer.php'; ?>
</body>
</html>
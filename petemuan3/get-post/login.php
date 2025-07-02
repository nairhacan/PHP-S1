<?php
// 

if ( isset($_POST["submit"])){
    
    if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
        header("location: admin.php");
    }
    else{
        $eror = true;
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>
    login admin
</h1>
<?php if (isset($eror)) : ?>
<p style="color: red; font-style: italic;">username or password foget</p>
<?php endif; ?>
<ul>
<form action="" method="POST">

<li>
    <label for="username">user name:</label>
    <input type="text" id="username" name="username">
</li>
<li>
    <label for="password">password:</label>
    <input type="password" id="password" name="password">
</li>
<li>
    <button type="submit" name="submit">login</button>
</li>
</form>
</ul>
</body>
</html>
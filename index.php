<?php
require_once'includes/config_session.inc.php';
require_once'includes/login_view.inc.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta  http-equiv="X-UA-Compatible"  content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/main.css">
<title> Document</title>
</head>

<body>
 <h3> log in </h3>

 <form  action="includes/login.inc.php"  method="post">
 <input type="text" name="username" placeholder="username">
<input type="text" name="password" placeholder="password">
 <button> Login </button>
 </form>

 </body>
 </html>
 

<?php 
    session_start();
    require_once "server.php" ;
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeAdmin</title>
    <link rel="stylesheet" href="page.css">
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&family=Mitr:wght@300&family=Prompt:wght@300&display=swap" rel="stylesheet">

    
</head>
<body>

    <?php include '../component/NavberAdmin.php'?>
    <?php include '../component/Admin/Sideber.php'?>
    <?php include '../component/Admin/Confirm/Home.php'?>
    <?php include '../component/Footer.php'?>





    <!-- FONT -->
    <style> @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@200&family=Mitr:wght@300&family=Prompt:wght@300&display=swap');
</style>
</body>
</html>
<?php
    session_start();
    if(isset($_REQUEST['txtUserName'])){
        echo $_REQUEST['txtUserName']; 
        $_SESSION['Name'] = $_REQUEST['txtUserName'];
        echo $_SESSION['Name'];
        header("Location: helloDemo.php");
    }else{
        echo "Nothing POST!!";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- <form method="POST" action="helloDemo.php"> -->
    <form method="POST">
        Your name:
        <input type="text" name="txtUserName">
        <input type="submit" name="btnOK" value="OK">
    </form>
</body>
</html>
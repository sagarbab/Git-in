<?php
    session_start();
    $db = mysqli_connect('localhost','root','');
    $connectdb = mysqli_select_db($db,'pandacuisine');
    $query = "insert into contact value('$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[subject]','$_POST[message]')";
    $run = mysqli_query($db,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        alert("Contact Details Successfully Submitted")
        location.href = "index.html";
    </script>
</body>
</html>
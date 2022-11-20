<?php

   $db = mysqli_connect('localhost','root','');
   $dbConnect = mysqli_select_db($db,'pandacuisine');
   $query1 = "insert into book_table values('$_POST[FirstName]','$_POST[LastName]','$_POST[Email]','$_POST[TableType]','$_POST[GuestNumber]','$_POST[Placement]','$_POST[Date]','$_POST[Time]','$_POST[Note]')";
    $person =explode('(',$_POST['TableType'])[1];
    $totalPerson = explode(' ',$person)[0];
    $query2 = "select * from tablecount";
    $queryExecute = mysqli_query($db,$query2);
    $row = mysqli_fetch_assoc($queryExecute);
    $currTable = $row['tc'];
    $newTable = $currTable+$totalPerson;
    $updateTable = "UPDATE tablecount SET tc='$newTable'"  ;
    $updateExecute = mysqli_query($db,$updateTable);
    $queryExecute = mysqli_query($db,$query1); 
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
        alert("successfully booked !!")
        location.href = "index.html"
    </script>
</body>
</html>
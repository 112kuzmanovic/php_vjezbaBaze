<?php
session_start();
require 'partials/head.php';
require 'partials/navbar.php';

require 'connection.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search</title>
</head>
<body style="background-color:lightgreen">
        <form action="addnew.php" method="get">
            <button type="submit" style="margin-left:14px;background-color:lightblue;" >Add New</button>
        </form><br>
        <form action="search1.php" method="get">
            <input type="text" style="width:500px;margin-left:380px;border:1px solid black" name="search" class="form-control" placeholder="search">
            <button type="submit" style="width:250px ; margin-left:500px ; margin-top:25px" class="btn btn-secondary form-control">Search</button>
        </form>
    
</body>
</html>
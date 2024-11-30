<?php
session_start();
if(isset($_SESSION['userdata'])){
    header("location: ../");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System Deshboard</title>
    <link rel="stylesheet" href="../routs/css/stylesheet.css">
</head>
<body>
    <style>
        #backbtn{
        float: left;
        }
        #logbtn{
            float: right;
        }
        button{
             background-color: white;
             padding:0.8%;
             margin:10px;
             border-radius:10px;
            }
        #profile{
            width: 39%;
            height: 90%;
            padding:10px;
            background-color: white;
            float:left;
        }
        #group{
            width: 56%;
            height: 90%;
            padding:10px;
            background-color: white;
            float:right;
        }


    </style>
</body>
</html>
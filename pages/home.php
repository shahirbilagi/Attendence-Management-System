<?php
    require_once "db-connect.php";
    $class = "SELECT COUNT(id) AS classNO FROM class_tbl";
    // $classNo = $conn->query($class);

    if($classNo){
    $row = $classNo->fetch_assoc();
    $classCount =$row['classNO'];

    echo $classCount;

    }
    else
    {
        $classCount=0;
    }
   
?>
<h1 class="page-title">Attendance Management System</h1>
<hr>

<!-- <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<div >
    <h1 class="page-title">Simple Attendance Management System</h1>
    <hr>
    <div style="display:flex;">
        <div>
        <i class="fa-solid fa-screen-users fa-4x"></i>
            Total Classes:
        </div>
        <div>
            <img src="" alt="">
            Total Students:
        </div>
    </div>
    </div> -->
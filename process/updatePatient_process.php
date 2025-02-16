<?php
session_start();
include("../database/db.php");


if (isset($_POST['saveButton'])) {

    date_default_timezone_set("Asia/Manila");

    $lname =  $_POST['lname'];
    $fname =  $_POST['fname'];
    $mname =  $_POST['mname'];
    $dob =  $_POST['dob'];

    $patient_id = $_SESSION['patient_id_update'];
    $archive_status = '1';
    $created_at = date("m/d/Y") . "-" . date("h:i a");

    $sql = "UPDATE patient_info SET lname= ?, fname = ? , mname = ?, dob = ? WHERE patient_id= ?"; //update query pdo
    $sql = $pdo->prepare($sql);
    $sql->execute([$lname, $fname, $mname, $dob, $patient_id]);

    echo "<script>alert('Successfully submitted!');	window.location.href='../pages/forms/viewPatients.php';</script>";
}

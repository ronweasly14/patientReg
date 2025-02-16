<?php
session_start();
include("../database/db.php");

if (isset($_POST['addPatient'])) {
    date_default_timezone_set("Asia/Manila");

    $lname =  $_POST['lname'];
    $fname =  $_POST['fname'];
    $mname =  $_POST['mname'];
    $dob =  $_POST['dob'];
    $patient_id = "patient-" . rand();
    $archive_status = '1';
    $created_at = date("m/d/Y") . "-" . date("h:i a");

    $sql = "INSERT INTO patient_info (patient_id, lname, fname, mname, dob, archive_status, created_at ) 
    VALUES (:patient_id, :lname, :fname, :mname, :dob, :archive_status, :created_at)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'patient_id' => $patient_id,
        'lname' => $lname,
        'fname' => $fname,
        'mname' => $mname,
        'dob' => $dob,
        'archive_status' => $archive_status,
        'created_at' => $created_at
    ]);

    echo "<script>alert('Successfully submitted!');	window.location.href='../index.php';</script>";
}

<?php
include("../database/db.php");

if (isset($_POST['addPatient'])) {

    $lname =  $_POST['lname'];
    $fname =  $_POST['fname'];
    $mname =  $_POST['mname'];
    $dob =  $_POST['dob'];

    $sql = "INSERT INTO patient_info (lname, fname, mname, dob) 
    VALUES (:lname, :fname, :mname, :dob)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'lname' => $lname,
        'fname' => $fname,
        'mname' => $mname,
        'dob' => $dob
    ]);

    echo "<script>alert('Successfully submitted!');	window.location.href='../index.php';</script>";
}

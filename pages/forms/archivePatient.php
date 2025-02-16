<?php
session_start();
include("../../database/db.php");

if (isset($_POST['archivePatient'])) {
    $_SESSION['patient_id_archive'] = $_POST['archivePatient'];
    date_default_timezone_set("Asia/Manila");
    $patient_id = $_SESSION['patient_id_archive'];

    $lname =  $_POST['lname'];
    $fname =  $_POST['fname'];
    $mname =  $_POST['mname'];
    $dob =  $_POST['dob'];
    $archive_status = '0';
    $created_at = date("m/d/Y") . "-" . date("h:i a");
    echo $patient_id . 'here';

    $sql = "UPDATE patient_info SET archive_status= ? WHERE patient_id= ?"; //update query pdo
    $sql = $pdo->prepare($sql);
    $sql->execute([$archive_status, $patient_id]);
    echo "<script>alert('Successfully submitted!');	window.location.href='viewPatients.php';</script>";
}

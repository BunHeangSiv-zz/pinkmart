<?php
// Database connection
include("../../connection/conect.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employeeName = $_POST['employee_name'];
    $sexID = $_POST['sex_id'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $phoneNumber = $_POST['phone_number'];
    $email = $_POST['email'];
    $telegram = $_POST['telegram'];
    $positionID = $_POST['position_id'];

    // Handle file upload
    $photo = $_FILES['photo']['name'];
    $target_dir = "uploads/";
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    $target_file = $target_dir . basename($photo);
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        echo "The file " . basename($photo) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    // Set a default value for statusid if it is required and not provided
    $statusID = 1; // Set your desired default value

    $sql = "INSERT INTO tblemployee (EmployeeName, PositionID, SexID, DOB, Address, PhoneNumber, Email, Telegram, Photo, StatusID)
            VALUES ('$employeeName', '$positionID', '$sexID', '$dob', '$address', '$phoneNumber', '$email', '$telegram', '$photo', '$statusID')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

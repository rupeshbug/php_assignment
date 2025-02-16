<?php
session_start();
include('includes/dbconnection.php');

if (!isset($_SESSION['detsuid'])) {
    echo json_encode(["status" => "error", "message" => "User not logged in"]);
    exit();
}

if (isset($_POST['dateexpense']) && isset($_POST['item']) && isset($_POST['costitem'])) {
    $userid = $_SESSION['detsuid'];
    $dateexpense = $_POST['dateexpense'];
    $item = $_POST['item'];
    $costitem = $_POST['costitem'];

    $stmt = $con->prepare("INSERT INTO tblexpense (UserId, ExpenseDate, ExpenseItem, ExpenseCost) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isss", $userid, $dateexpense, $item, $costitem);

    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "Expense has been added"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Something went wrong. Please try again"]);
    }

    $stmt->close();
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request"]);
}

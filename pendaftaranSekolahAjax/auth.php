<?php
session_start();
include 'config.php';
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request.']);
    exit;
}

$action = $_POST['action'] ?? '';
$username = mysqli_real_escape_string($conn, $_POST['username'] ?? '');
$password = $_POST['password'] ?? '';

if ($action === 'signup') {
    $check = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username'");
    if (mysqli_num_rows($check) > 0) {
        echo json_encode(['success' => false, 'message' => 'Username already exists!']);
        exit;
    }
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $insert = mysqli_query($conn, "INSERT INTO admin (username, password) VALUES ('$username', '$hash')");
    if ($insert) {
        echo json_encode(['success' => true, 'message' => 'Sign up Successful. Please login.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Sign up failed.']);
    }
    exit;
}

if ($action === 'login') {
    $result = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username'");
    if ($row = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $row['password'])) {
            $_SESSION['user'] = $row['username'];
            echo json_encode(['success' => true, 'message' => 'Login successful.', 'redirect' => 'dashboard.php']);
            exit;
        } else {
            echo json_encode(['success' => false, 'message' => 'Invalid password!']);
            exit;
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'User not found!']);
        exit;
    }
}
echo json_encode(['success' => false, 'message' => 'Invalid action.']); 
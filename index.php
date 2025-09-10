<?php
include 'includes/header.php';
$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'list':
        include 'pages/list.php';
        break;
    case 'add':
        include 'pages/add.php';
        break;
    default:
        include 'pages/home.php';
}
include 'includes/footer.php';
?>

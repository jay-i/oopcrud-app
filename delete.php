<?php
require_once 'class.php';

$id = $_GET['id'];
$conn = new db_class();
$conn->delete($id);

header("Location: index.php");
?>
<?php
require_once '../index/connect.php';

$id = $_GET['id'];

$stmt = $pdo->prepare("DELETE FROM bidang_ilmu WHERE id = ?");
$stmt->execute([$id]);

header("Location: bidang_ilmu.php?pesan=deleted");
exit;

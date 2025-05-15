<?php
require_once '../index/connect.php';

$id = $_GET['id'];

$query = "DELETE FROM kegiatan_dosen WHERE id = :id";
$stmt = $pdo->prepare($query);
$stmt->execute([':id' => $id]);

header('Location: kegiatan_dosen_list.php');
exit;

<?php include_once '../index/header.php'; require_once '../index/connect.php'; ?>
<?php
// Aktifkan error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Ambil data kegiatan dosen lengkap (tanpa kolom 'id' dan 'kategori')
$query = "
SELECT 
  d.nama AS nama_dosen,
  k.deskripsi AS nama_kegiatan,
  k.tanggal_mulai,
  k.tanggal_selesai,
  k.tempat,
  k.deskripsi
FROM dosen_kegiatan dk
JOIN dosen d ON dk.dosen_id = d.id
JOIN kegiatan k ON dk.kegiatan_id = k.id
";

$stmt = $pdo->query($query);
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="app-wrapper">
  <?php include_once '../index/navbar.php'; ?>
  <?php include_once '../index/sidebar.php'; ?>

  <main class="app-main">
    <div class="app-content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6"><h3 class="mb-0">Kegiatan Dosen</h3></div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Kegiatan Dosen</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <div class="app-content">
      <div class="container-fluid">
        <a href="kegiatan_dosen_tambah.php" class="btn btn-primary mb-3">Tambah Kegiatan Dosen</a>

        <div class="table-responsive">
          <table class="table table-bordered" style="text-align: center;">
            <thead class="table-light">
              <tr>
                <th>No</th>
                <th>Nama Dosen</th>
                <th>Nama Kegiatan</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Tempat</th>
                <th>Deskripsi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; foreach ($data as $row): ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= htmlspecialchars($row['nama_dosen']) ?></td>
                <td><?= htmlspecialchars($row['nama_kegiatan']) ?></td>
                <td><?= htmlspecialchars($row['tanggal_mulai']) ?></td>
                <td><?= htmlspecialchars($row['tanggal_selesai']) ?></td>
                <td><?= htmlspecialchars($row['tempat']) ?></td>
                <td><?= htmlspecialchars($row['deskripsi']) ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </main>

  <?php include_once '../index/footer.php'; ?>
</div>

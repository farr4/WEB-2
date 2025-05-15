<?php include_once '../index/header.php'; require_once '../index/connect.php'; ?>
<?php
$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM bidang_ilmu WHERE id = ?");
$stmt->execute([$id]);
$data = $stmt->fetch();
?>
<div class="app-wrapper">
  <?php include_once '../index/navbar.php'; ?>
  <?php include_once '../index/sidebar.php'; ?>

  <main class="app-main">
    <div class="app-content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6"><h3 class="mb-0">List Bidang Ilmu</h3></div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Bidang Ilmu</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <div class="app-content">
    <form action="proses_bidang_ilmu.php" method="POST">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Bidang Ilmu</label>
          <input type="text" class="form-control" name="nama" value="<?= htmlspecialchars($data['nama']) ?>" required>
        </div>
        <div class="mb-3">
          <label for="deskripsi" class="form-label">Deskripsi</label>
          <textarea class="form-control" name="deskripsi" rows="3"><?= htmlspecialchars($data['deskripsi']) ?></textarea>
        </div>
        <button type="submit" name="update" class="btn btn-success">Update</button>
        <a href="bidang_ilmu.php" class="btn btn-secondary">Batal</a>
      </form>
    </div>
  </main>

  <?php include_once '../index/footer.php'; ?>
</div>


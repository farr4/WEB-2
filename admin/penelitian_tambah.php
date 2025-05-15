<?php include_once '../index/header.php'; require_once '../index/connect.php'; 

// Ambil data bidang ilmu untuk dropdown
$bidang = $pdo->query("SELECT * FROM bidang_ilmu ORDER BY nama ASC")->fetchAll();
?>

<div class="app-wrapper">
  <?php include_once '../index/navbar.php'; ?>
  <?php include_once '../index/sidebar.php'; ?>

  <main class="app-main">
    <div class="app-content">
      <h3>Tambah Penelitian</h3>
      <form action="penelitian_proses.php" method="post">
        <div class="mb-3">
          <label>Judul</label>
          <input type="text" name="judul" class="form-control" required>
        </div>
        <div class="mb-3">
          <label>Tanggal Mulai</label>
          <input type="date" name="mulai" class="form-control" required>
        </div>
        <div class="mb-3">
          <label>Tanggal Akhir</label>
          <input type="date" name="akhir" class="form-control" required>
        </div>
        <div class="mb-3">
          <label>Tahun Ajaran</label>
          <input type="text" name="tahun_ajaran" class="form-control" placeholder="contoh: 2024/2025" required>
        </div>
        <div class="mb-3">
          <label>Bidang Ilmu</label>
          <select name="bidang_ilmu_id" class="form-control" required>
            <option value="">-- Pilih --</option>
            <?php foreach($bidang as $b): ?>
              <option value="<?= $b['id'] ?>"><?= $b['nama'] ?></option>
            <?php endforeach ?>
          </select>
        </div>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
        <a href="penelitian_list.php" class="btn btn-secondary">Batal</a>
      </form>
    </div>
  </main>

  <?php include_once '../index/footer.php'; ?>
</div>

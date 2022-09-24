<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
if (!empty($_POST)) {
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
    $nama = isset($_POST['nama_kelas']) ? $_POST['nama_kelas'] : '';
    $email = isset($_POST['dosen']) ? $_POST['dosen'] : '';
    $notelp = isset($_POST['sks']) ? $_POST['sks'] : '';
    $pekerjaan = isset($_POST['deskripsi']) ? $_POST['deskripsi'] : '';

    $stmt = $pdo->prepare('INSERT INTO mahasiswa VALUES (?, ?, ?, ?, ?)');
    $stmt->execute([$id, $nama, $email, $notelp, $pekerjaan]);

    $msg = 'Data Berhasil Ditambahkan!';
}
?>


<?=template_header('Create')?>

<div class="content update">
	<h2>Tambah Data</h2>
    <form action="create.php" method="post">
        <label for="id">ID</label>
        <label for="nama_kelas">Nama Kelas</label>
        <input type="text" name="id" value="auto" id="id">
        <input type="text" name="nama_kelas" id="nama_kelas">
        <label for="dosen">Dosen</label>
        <label for="sks">SKS</label>
        <input type="text" name="dosen" id="email">
        <input type="text" name="sks" id="notelp">
        <label for="deskripsi">Deskripsi</label>
        <input type="text" name="deskripsi" id="pekerjaan">
        <input type="submit" value="Create">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>
<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
if (isset($_GET['id'])) {
    if (!empty($_POST)) {
        $id = isset($_POST['id']) ? $_POST['id'] : NULL;
        $nama = isset($_POST['nama_kelas']) ? $_POST['nama_kelas'] : '';
        $email = isset($_POST['dosen']) ? $_POST['dosen'] : '';
        $notelp = isset($_POST['sks']) ? $_POST['sks'] : '';
        $pekerjaan = isset($_POST['deskripsi']) ? $_POST['deskripsi'] : '';
        
        // Update the record
        $stmt = $pdo->prepare('UPDATE mahasiswa SET id = ?, nama_kelas = ?, dosen = ?, sks = ?, deskripsi = ? WHERE id = ?');
        $stmt->execute([$id, $nama, $email, $notelp, $pekerjaan, $_GET['id']]);
        $msg = 'Updated Successfully!';
    }
    $stmt = $pdo->prepare('SELECT * FROM mahasiswa WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$contact) {
        exit('Contact doesn\'t exist with that ID!');
    }
} else {
    exit('No ID specified!');
}
?>



<?=template_header('Read')?>

<div class="content update">
	<h2>Edit Data #<?=$contact['id']?></h2>
    <form action="update.php?id=<?=$contact['id']?>" method="post">
        <label for="id">ID</label>
        <label for="nama">Nama Kelas</label>
        <input type="text" name="id" value="<?=$contact['id']?>" id="id">
        <input type="text" name="nama_kelas" value="<?=$contact['nama_kelas']?>" id="nama">
        <label for="email">Dosen</label>
        <label for="notelp">SKS</label>
        <input type="text" name="dosen" value="<?=$contact['dosen']?>" id="email">
        <input type="text" name="sks" value="<?=$contact['sks']?>" id="notelp">
        <label for="pekerjaan">Deskripsi</label>
        <input type="text" name="deskripsi" value="<?=$contact['deskripsi']?>" id="title">
        <input type="submit" value="Update">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>
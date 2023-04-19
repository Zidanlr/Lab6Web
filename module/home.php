<style>
  .main {
    position: absolute;
    top: 40%;
    left: 55%;
    transform: translate(-50%, -50%);
  }

  table {
    margin: 0 auto;
  }
</style>

<?php
$database = new Database();
$data = $database->main("mahasiswa");
?>
<div class="main">
    <a class="tambah" href="add">tambah</a>
    <table>
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>
        <?php
        foreach($data as $row) {
        ?>
            <tr>
            <td><?=$row['nim']; ?></td>
            <td><?=$row['nama']; ?></td>
            <td><?=$row['kelas']; ?></td>
            <td>
              <a href="update?nim=<?= $row['nim']; ?>"><button>update</button></a>
              <a href="hapus?nim=<?= $row['nim']; ?>"><button>hapus</button></a>
            </td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>